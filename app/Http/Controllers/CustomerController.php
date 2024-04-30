<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $details=Customer::all();

        return response()->json([
            'details'=> $details,


        ]);


    //   return view('admin/customer.customdata',compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin/customer.customer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Customer::create([
            'name'=>$request->Customer_name,
            'type'=>$request->Ctype,
            'nic'=>$request->NIC,
            'area'=>$request->area,
            'mobile'=>$request->mobile,
            'address'=>$request->address,
            'vatnum'=>$request->vatnum,
            'svat'=>$request->Svat,
            'email'=>$request->email
            ]);

        redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
