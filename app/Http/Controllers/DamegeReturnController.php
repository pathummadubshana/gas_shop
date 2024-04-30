<?php

namespace App\Http\Controllers;

use App\Models\Damege_return;
use Illuminate\Http\Request;

class DamegeReturnController extends Controller
{
    //

    public function index(){
        $items=Damege_return::all();

        return response()->json([
            'items'=>$items,
        ]);






    }

    // public function getreturn(){

    //     $data=Damege_return::all();
    //     return response()->json([
    //        'items'=> $data,

    //     ]);

    // }



    public function create(){
        return view('admin.damage.return');

    }

    public function store(Request $request){

        Damege_return::create([
            'value'=>$request->new,
            'name'=>$request->name,
            'mobile'=>$request->number,
            'area'=>$request->area,
            'address'=>$request->address,
            'sales'=>$request->sales,
            'vehical'=>$request->vehical,
            'return'=>$request->return,
            'product'=>$request->product,
            'qty'=>$request->qty,



        ]);

        return redirect()->back();

    }
}
