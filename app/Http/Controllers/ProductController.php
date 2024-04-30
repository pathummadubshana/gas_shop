<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $display=product::all();

       return view('admin.product',compact('display'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $product=product::create([
        'product'=>$request->product,
        'productcode'=>$request->code,
        'newprice'=>$request->Mprice,
        'refilprice'=>$request->Rprice,
        'emptyprice'=>$request->Eprice,
        'select'=>$request->select,
        ]);

       return view('admin.product',compact('product'));

    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
        return view('admin.update',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //

        $product->update([
        'product'=>$request->product,
        'productcode'=>$request->code,
        'newprice'=>$request->Mprice,
        'refilprice'=>$request->Rprice,
        'emptyprice'=>$request->Eprice,
        'select'=>$request->select,

        ]);

        return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
        $res=$product->delete();
        if($res){
            return redirect()->back()->with(['msg'=>'success']);
        }else{
            return redirect()->back()->with(['msg'=>'error']);
        }
    }
}
