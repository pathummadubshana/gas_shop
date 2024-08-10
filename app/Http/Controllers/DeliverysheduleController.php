<?php

namespace App\Http\Controllers;

use App\Models\Deliveryshedule;
use Illuminate\Http\Request;

class DeliverysheduleController extends Controller
{
    //


    public function index(){
        $data=Deliveryshedule::all();
        return view('admin.dilivery.sheduli',compact('data'));
    }


    public function store(Request $request){
        Deliveryshedule::create([
            'product'=>$request->product,
            'date'=>$request->date,
            'address'=>$request->address,
            'contact'=>$request->contact,


            ]);


          return redirect()->back();
    }


    public function update(Request $request,$id){
        $sheduling = Deliveryshedule::find($id);
        // Update sheduling data
        $sheduling->product = $request->input('product');
        $sheduling->date = $request->input('date');
        $sheduling->address = $request->input('address');
        $sheduling->contact = $request->input('contact');
        $sheduling->save();
        return response()->json(['message' => 'Sheduling updated successfully!']);
        


    }

    public function delete(Deliveryshedule $deliveryshedule,$id){
        $deliveryshedule=Deliveryshedule::findorFail($id);
        $deliveryshedule->delete();

        return redirect()->back();

    }


    public function edit($id){
        $item = Deliveryshedule::findOrFail($id);
        return response()->json($item);
    }
}
