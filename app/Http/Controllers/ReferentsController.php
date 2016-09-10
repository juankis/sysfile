<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Referent;

use App\Department;

use Laracasts\Flash\Flash;

use Session;

class ReferentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $referents = Referent::all();
        return View('referents.index')->with('referents', $referents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::orderBy('name', 'ASC')->lists('name', 'id');
        return View('referents.templeate')->with('departments', $departments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $referent = new referent($request->all());
        $referent->save();
        Flash::info('El Departamento se ha creado correctamente');
        return redirect()->route('sysfile.referents.index');
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
        $referent = referent::find($id);
        $departments = Department::orderBy('name', 'ASC')->lists('name', 'id');
        return View('referents.templeate')->with('referent', $referent)
                                          ->with('departments', $departments);
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
        $referent = Referent::find($id);
        $referent->fill($request->all());
        $referent->save();
        Flash::info('El Referente se ha editado correctamente');
        return redirect()->route('sysfile.referents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $referent = Referent::find($id);
        $referent->delete();
        Flash::info('El Referente se ha eliminado correctamente');
        return redirect()->route('sysfile.referents.index')->with('success','noticia');
    }
}
