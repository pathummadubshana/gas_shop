<?php

namespace App\Http\Controllers;

use App\Models\Diliverytracking;
use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliverytrackingController extends Controller
{
    //
    public function index(Delivery $delivery){
        $data=Diliverytracking::all();
        return view('admin.dilivery.traking',compact('data','delivery'));
    }

    public function store(Request $request){
        Diliverytracking::create([
            'product'=>$request->product,
            'code'=>$request->code,
            'status'=>$request->status,
            'area'=>$request->area,


            ]);
            return redirect()->back();
    }
    public function edit($id){
        $item = Diliverytracking::findOrFail($id);
        return response()->json($item);
    }

    public function update(Request $request,$id){

        $tracking = Diliverytracking::find($id);
        // Update sheduling data
        $tracking ->product = $request->input('product');
        $tracking ->code = $request->input('code');
        $tracking ->status = $request->input('status');
        $tracking ->area = $request->input('area');
        $tracking ->save();
        return response()->json(['message' => 'Tracking updated successfully!']);






    }
    public function delete(Diliverytracking $diliverytracking,$id){
        $diliverytracking=Diliverytracking::findorFail($id);
        $diliverytracking->delete();

        return redirect()->back();

    }
}
