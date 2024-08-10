<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Deliveryreturn;
use App\Models\Diliverytracking;
use Illuminate\Http\Request;

class DiliveryController extends Controller
{
    //
    public function store(Request $request){

        $product=Delivery::create([
            'product'=>$request->product,
            'code'=>$request->code,
            'Mprice'=>$request->Mprice,
            'qty'=>$request->qty,
            'area'=>$request->area,

            ]);

           return redirect()->back();
    }

    public function productreturn( Delivery $delivery){
        $data=Deliveryreturn::all();

        return view('admin.dilivery.return',['delivery'=>$delivery],['data'=>$data]);

    }
    public function returnstore(Request $request){
       Deliveryreturn::create([
            'product'=>$request->product,
            'code'=>$request->code,
            'Mprice'=>$request->Mprice,
            'qty'=>$request->qty,
            'cname'=>$request->cname,
            'area'=>$request->area,

            ]);

           return redirect()->back();

    }









    





}
