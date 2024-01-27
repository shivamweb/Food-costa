<?php

namespace App\Http\Controllers;

use App\Models\FoodItem;
use App\Models\Category;
use Illuminate\Http\Request;

class FoodItemController extends Controller
{
    private $foodItem, $category;

    public function __construct(Category $category, FoodItem $foodItem)
    {
        $this->category = $category; // corrected variable name
        $this->foodItem = $foodItem;
    }

    public function addFoodItem(Request $request)
    {
        $data = $request->all();
    
        $imagefile = $request->file('image');
        $filename = time() . '_' . $imagefile->getClientOriginalName();
        $imagePath = 'FoodItemImage/' . $filename;
        $imagefile->move(public_path('FoodItemImage/'), $filename);
    
        $foodItem = $this->foodItem->create([
            'category_id' => $data['category_id'],
            'food_name'   => $data['food_name'],
            'price'       => $data['price'],
            'image'       => $imagePath,
        ]);
    
        return redirect()->back()->with('status', 'success','foodItem')->with('message', 'food Item Added Successfully');
    }
    

    public function fetchFoodItem()
    {
        $categories = $this->category->all();
        $foodItems = $this->foodItem->get();
        $categoryNames = [];

        foreach ($foodItems as $foodItem) {
            $categoryModel = $this->category->find($foodItem->category_id);
            if ($categoryModel) {
                $categoryNames[$foodItem->id] = $categoryModel->category;
            }
        }

        return view('food-item', compact('foodItems', 'categoryNames', 'categories'))->render();
    }

   
}
