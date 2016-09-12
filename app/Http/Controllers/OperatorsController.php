<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Operator;

use App\User;

use Laracasts\Flash\Flash;

use Session;

use Validator;

use Redirect;

class OperatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operators = Operator::all();
        return View('operators.index')->with('operators', $operators);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('operators.templeate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($this->usernameValid($request->username, ''))
            return Redirect::back()->withErrors(['El nombre de usuario ya esta en Uso']);  

        $user = new User();
        $user->username = $request->username; 
        $user->password = bcrypt($request->username); 
        $user->type = '2';
        $user->save();
  
        $operator = new Operator($request->all());
        $operator->user_id = 1;
        $operator->save();
        Flash::info('El Operador se ha creado correctamente');
        return redirect()->route('sysfile.operators.index');
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
        $operator = operator::find($id);
        return View('operators.templeate')->with('operator', $operator);
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
        $operator = Operator::find($id);

        if($this->usernameValid($request->username, $operator->user->id))
            return Redirect::back()->withErrors(['El nombre de usuario ya esta en Uso']); 
        //dd($request);
        if(isset($request->passwords_check)){
            if($request->password != $request->password2)
            return Redirect::back()->withErrors(['Los passwords no coinciden']);    
        
            if($this->validPassword($request->password,$request->password2))
                return Redirect::back()->withErrors(['El nuevo password no es correcto, deberia tener mas de 6 caracteres']);        
        }
        
        
        $user = User::find($operator->user->id);
        $user->username = $request->username; 
        $user->password = bcrypt($request->password); 
        $user->type = '2';
        $user->save();

        $operator->fill($request->all());
        $operator->save();
        Flash::info('El Operator se ha editado correctamente');
        return redirect()->route('sysfile.operators.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $operator = Operator::find($id);
        $operator->delete();
        Flash::info('El Operador se ha eliminado correctamente');
        return redirect()->route('sysfile.operators.index')->with('success','noticia');
    }

    /**
     * Validate username.
     *
     * @param  string  $username
     * @return \Illuminate\Http\Response
     */
    public function usernameValid($username, $idUser)
    {
        $validaciones = 'required|max:255|unique:users,username';
        
        if($idUser!='') $validaciones.= ','.$idUser;
        
        $user = array();
        $user['username'] = $username;
         $res = Validator::make($user, ['username' => $validaciones]);
        return $res->fails();
    }
    /**
     * Validate username.
     *
     * @param  string  $username
     * @return \Illuminate\Http\Response
     */
    
    public function validPassword($password, $password_confirmation)
    {
        $user = array();
        $user['password'] = $password;
        $user['password_confirmation'] = $password_confirmation;
        $res = Validator::make($user, ['password' => 'required|min:6|confirmed']);
        return $res->fails();
    }
}
