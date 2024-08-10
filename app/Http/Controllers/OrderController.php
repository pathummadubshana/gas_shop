<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function bill($id)
    {
        //



        $item = Order::findOrFail($id);
      $p=$item->price;
      $q=$item->qty;

      $price=intval($p);
      $qty=intval($q);

      $total=$price * $qty;



        return response()->json($item);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $order=Order::create([
            'product'=>$request->product,
            'code'=>$request->code,
            'qty'=>$request->qty,
            'price'=>$request->price,
            'name'=>$request->name,
            'address'=>$request->address,
            'mobile'=>$request->mobile,
            ]);

           return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
