<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products;

    public function __construct(Product $products)
    {
        $this->products = $products;
    }
    public function addproduct(Request $request)
    {
        
        try {
            $this->validate($request, [

                'product_name'    => 'required',
                'quantity'       => 'required',

            ]);
            $addproduct = $request->all();
            $this->products->AddProduct($addproduct);
       
            return redirect()->back()->with('status', 'success')->with('message', 'Product Added Succesfully');
        } catch (\Exception $e) {
          
            Log::error('[ProductController][addproduct]Validation error: ' . 'Request=' . $request);
            return redirect()->back()->with('status', 'error')->with('message', 'products Not Added ');
        }
    }
    public function viewproduct(Request $request)
    {
        $status = null;
        $message = null;
        $products = $this->products->all();

        return view('product', compact('status', 'message', 'products'));
    }
    // public function listproduct()
    // {

    //     $status = null;
    //     $message = null;
    //     $products = $this->products->all();

    //     return view('product', compact('status', 'message', 'products'))->render();
    // }
    
}
