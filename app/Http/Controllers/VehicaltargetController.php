<?php

namespace App\Http\Controllers;

use App\Models\Vehicaltarget;
use Illuminate\Http\Request;

class VehicaltargetController extends Controller
{
    //

    public function index(){

        $targetdata=Vehicaltarget::get();


        return response()->json([
            'targetdata'=>$targetdata,
        ]);

    }
    public function create(){

        return view('admin/vehical/vehicaltarget');

    }

    public function store(Request $request){

        Vehicaltarget::create([
            'vehical'=>$request->vehical,
            'month'=>$request->month,
            'product'=>$request->product,
            'cylinder'=>$request->cylinder,


        ]);
        return redirect()->back();



    }
}
