<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeeData = Employee::with('Admin')->get()->toArray();
        return view('employee.index', compact('employeeData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $adminData = Admin::all()->toArray();
        return view('employee.create', compact('adminData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'admin_id' => 'bail|required|max:255',
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'country' => 'required|max:255',
            'experience' => 'required',
            'company' => 'required'
        ]);
        
        $employeeData = new Employee([
            'admin_id' => $request->get('admin_id'),
            'name' => $request->get('name'),
            'address' => $request->get('address'),
            'country' => $request->get('country'),
            'experience' => $request->get('experience'),
            'company' => $request->get('company')
        ]);
        
        $employeeData->save();
        
        return redirect('/employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
