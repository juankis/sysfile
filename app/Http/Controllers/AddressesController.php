<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Address;

use App\Customer;

use Laracasts\Flash\Flash;

use Session;

class AddressesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses = Address::all();
        return View('addresses.index')->with('addresses', $addresses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::orderBy('name', 'ASC')->lists('name', 'id');
        return View('addresses.templeate')->with('customers', $customers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $address = new Address($request->all());
        $address->save();
        Flash::info('El La direccion se ha creado correctamente');
        return redirect()->route('sysfile.addresses.index');
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
        $address = Address::find($id);
        return View('addresses.templeate')->with('address', $address)
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
        $address = Address::find($id);
        $address->fill($request->all());
        $address->save();
        Flash::info('La Direccion se ha editado correctamente');
        return redirect()->route('sysfile.addresses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $address = address::find($id);
        $address->delete();
        Flash::info('La Direccion se ha eliminado correctamente');
        return redirect()->route('sysfile.addresses.index')->with('success','noticia');
    }
}
