<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Tracking;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    //


    public function edit(Order $order){
        return view('admin.order.tracking',['order'=>$order]);
    }

    public function store(Request $request){
        Tracking::create([
            'product'=>$request->product,
            'code'=>$request->code,
            'status'=>$request->status

        ]);

        return redirect('/trackingdata');

    }
}
