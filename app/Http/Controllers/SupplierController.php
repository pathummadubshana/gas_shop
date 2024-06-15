<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        Supplier::create([
            'name' => $request->name,
            'email' => $request->email,
            'area' => $request->area,
            'item' => $request->item,
            'mobile' => $request->mobile,

        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        //
        $data=Supplier::all();
        return view('admin.inventory.suplierEdit',['supplier'=>$supplier,'data'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier,$id)
    {
        //
        $supplier = Supplier::findorFail($id);
        $supplier->update($request->all());
        return redirect('/supplier')->with('success','Update is success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier,$id)
    {
        //
        $supplier = Supplier::findorFail($id);
        $supplier->delete();


        return redirect('/supplier')->with('success','Delete item success');
    }
}
