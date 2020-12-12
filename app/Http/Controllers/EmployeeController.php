<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index',compact('employees'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'emp_name'=>'required',
            'emp_role'=>'required',
            'badge_no'=>'required',
            
        ]);

        $employee = new Employee([
            'emp_name' => $request->get('emp_name'),
            'emp_role' => $request->get('emp_role'),
            'badge_no' => $request->get('badge_no'),
            
        ]);       
        $employee->save();
        return redirect('/dashboard')->with('success', 'Employee saved!');
        //
    }
    public function show($id)
    {
        $employee =Employee::find($id);
        return view('employees.view',compact('employee'));    
    }
    public function edit($id)
    {
        $employee =Employee::find($id);
        return view('employees.edit',compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'emp_name'=>'required',
            'emp_role'=>'required',
            'badge_no'=>'required',
            
        ]);
        $employee = Employee::find($id);
        $employee->emp_name =  $request->get('emp_name');
        $employee->emp_role =  $request->get('emp_role');
        $employee->badge_no =  $request->get('badge_no');
        $employee->save();
        
        return redirect('/employees')->with('success', 'Employee updated!');
    }

    public function destroy($id)
    {
        $employee =Employee::find($id);
        $employee->delete();
        return redirect('/employees')->with('success', 'Employee deleted!');
    }
}
