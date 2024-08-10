<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class BillController extends Controller
{
    //

    public function search(Request $request){

        $item=$request->input('search');


        $product=Stock::where('product','like',"%".$item."%")->orWhere('created_at','like',"%".$item."%")->get();

        return view('admin.billing.billing',['product'=>$product]);



    }

    public function display($id){
        $item = Stock::findOrFail($id);
        return response()->json($item);

    }
}
