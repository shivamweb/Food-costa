<?php

namespace App\Http\Controllers;

use App\Models\FoodItem;
use App\Models\Table;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class TableController extends Controller
{
    private $tables,$foodItem;

    public function __construct(Table $tables , FoodItem $foodItem)
    {
        $this->tables = $tables;
        $this->foodItem = $foodItem;
    }
   public function addtable(Request $request)
    {
        $data = $request->all();
        $this->tables->create([
            'table_no'  => $data['table_no'],
        ]);
        return redirect()->back()->with('status', 'success')->with('message', 'Table Added Succesfully');
    }
    public function viewtable(Request $request)
    {
        $status = null;
        $message = null;
        $tables = $this->tables->all();

        return view('table-no', compact('status', 'message', 'tables'));
    }

    public function listTable()
    {

        $status = null;
        $message = null;
        $tables = $this->tables->get();
        $foodItems = $this->foodItem->all();
        return view('home', compact('status','message','tables','foodItems'))->render();
    }

}
