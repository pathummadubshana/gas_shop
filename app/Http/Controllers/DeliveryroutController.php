<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Deliveryrouting;
use Illuminate\Http\Request;

class DeliveryroutController extends Controller
{
    public function index(Delivery $delivery){
        $data=Deliveryrouting::all();
        return view('admin.dilivery.routing',compact('data','delivery'));


    }

    public function store(Request $request){
        Deliveryrouting::create([
            'product'=>$request->product,
            'area'=>$request->area,
            'vnumber'=>$request->vnumber,
            'emloyee'=>$request->emloyee,
            'mobile'=>$request->mobile,



            ]);


          return redirect()->back();
    }


    public function delete(Deliveryrouting $deliveryrouting,$id){
        $deliveryrouting=Deliveryrouting::findorFail($id);
        $deliveryrouting->delete();

        return redirect()->back();

    }


}
