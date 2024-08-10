<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderrepotController extends Controller
{
    //
    public function show(){
        $data= DB::table('stocks')
         ->join('orders','orders.id','=','stocks.id')
         ->select('stocks.*','orders.*')
         ->get();


         return view('admin.inventory.report',['data'=>$data]);

    }
}
