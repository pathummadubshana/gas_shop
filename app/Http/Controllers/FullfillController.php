<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class FullfillController extends Controller
{
    //
    public function conect(){
       $data= DB::table('trackings')
        ->join('orders','orders.id','=','trackings.id')
        ->select('trackings.*','orders.*')
        ->get();
      

        return view('admin.order.fulfill',['data'=>$data]);



    }
}
