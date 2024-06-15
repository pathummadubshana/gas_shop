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
        $details=product::all();

        return response()->json([
            'details'=> $details,


        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
       // return view('admin.product');
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

       return redirect()->back();

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
        $data=product::all();
        return view('admin.update',['product'=>$product],['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product,$id)
    {
        //

        $product = product::findorFail($id);
        $product->update($request->all());
        return redirect('/product')->with('success','Update is success');

       // return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product,$id)
    {
        //
        $product = product::findorFail($id);
        $product->delete();


        return redirect()->back()->with('success','Delete item success');

    }
}
