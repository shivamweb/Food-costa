<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    private $categories;

    public function __construct(Category $categories)
    {
        $this->categories = $categories;
    }
    public function addcategory(Request $request)
    {
        
        try {
            $this->validate($request, [

                'category_name'    => 'required',

            ]);
            $addcategory = $request->all();
            $this->categories->AddCategory($addcategory);
       
            return redirect()->back()->with('status', 'success')->with('message', 'Category Added Succesfully');
        } catch (\Exception $e) {
            
            Log::error('[CategoryController][addcategory]Validation error: ' . 'Request=' . $request);
            return redirect()->back()->with('status', 'error')->with('message', 'category Not Added ');
        }
    }
    public function viewcategory(Request $request)
    {
        $status = null;
        $message = null;
        $categories = $this->categories->all();

        return view('category', compact('status', 'message', 'categories'));
    }
    public function listcategory()
    {

        $status = null;
        $message = null;
        $categories = $this->categories->all();

        return view('category', compact('status', 'message', 'categories'))->render();
    }
}
