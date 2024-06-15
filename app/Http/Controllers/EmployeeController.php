<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Empty_;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=Employee::all();

        return response()->json([
            'data'=>$data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin/emloyee.employee');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
      $data = Employee::create([
            'name'=>$request->emp_name,
            'epfno'=>$request->epf_no,
            'nic'=>$request->nic,
            'mobile'=>$request->mobile,
            'address'=>$request->address,
            'emptype'=>$request->employee,

            ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
        return view('admin.emloyee.empupdate',['employee'=>$employee]);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee,$id)
    {
        //



        $employee = Employee::findorFail($id);
        $employee->update($request->all());
        return redirect('/employee')->with('success','Update is success');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee,$id)
    {
        //

        $employee = Employee::findorFail($id);
        $employee->delete();


        return redirect()->back()->with('success','Delete item success');

       // return redirect()->back();


    }
}
