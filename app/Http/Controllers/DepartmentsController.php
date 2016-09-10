<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\DepartmentRequest;

use App\Department;

use App\Customer;

use Laracasts\Flash\Flash;

use Session;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        return View('departments.index')->with('departments', $departments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::orderBy('name', 'ASC')->lists('name', 'id');
        return View('departments.templeate')->with('customers', $customers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = new Department($request->all());
        $department->save();
        Flash::info('El Departamento se ha creado correctamente');
        return redirect()->route('sysfile.departments.index');
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
        $customers = Customer::orderBy('name', 'ASC')->lists('name', 'id');
        $department = Department::find($id);
        return View('departments.templeate')->with('department', $department)
                                            ->with('customers', $customers);
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
        $department = Department::find($id);
        $department->fill($request->all());
        $department->save();
        Flash::info('El Departamento se ha editado correctamente');
        return redirect()->route('sysfile.departments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::find($id);
        $department->delete();
        Flash::info('El Departamento se ha eliminado correctamente');
        return redirect()->route('sysfile.departments.index')->with('success','noticia');
    }
}
