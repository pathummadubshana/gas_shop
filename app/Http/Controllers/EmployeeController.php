<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

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

        return view('admin/emloyee.employee');
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
    public function edit(Employee $employee,$id)
    {
        //
        $emp=Employee::find($id);
        if($emp)
        {
            return response()->json([
                'status'=>200,
                'emp'=>$emp

            ]);

        }
        else{
            return response()->json([
                'status'=>404,
                'emp'=>'employee not found'
            ]);
        }



    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee,$id)
    {
        //
        $emp=Employee::find($id);
        $emp->name=$request->input('name');
        $emp->epfno=$request->input('epfno');
        $emp->nic=$request->input('nic');
        $emp->mobile=$request->input('mobile');
        $emp->address=$request->input('address');
        $emp->emptype=$request->input('emptype');
        $emp->update();
        //return view('admin/emloyee.employee');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //

        $emp=Employee::find($id);
        $emp->delete();
        return response()->json(['success'=>'Recorde has been deleted']);
       // return redirect()->back();


    }
}
