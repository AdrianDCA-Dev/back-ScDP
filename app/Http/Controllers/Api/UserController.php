<?php

namespace App\Http\Controllers\Api;

use App\Persona;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $user->each(function ($user){
            $user->persona;
            $user->role;
        });

        return response()->json(compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /*$this->validate($request,[
            'ci' => 'required|string|unique:personas',
            'nombre' => 'required|string',
            'apellidos' => 'required|string',
            'sexo' => 'required|boolean',
            'fechaNac' => 'required|date',
            'direccion' => 'required|string',
            'telefono' => 'required|string',
            'celular' => 'required|string',
            'name' => 'required|string|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);*/

        $persona = new Persona();
        $persona->ci = trim($request->ci);
        $persona->nombre = trim($request->nombre);
        $persona->apellidos = trim($request->apellidos);
        $persona->sexo = trim($request->sexo);
        $persona->fechaNac = trim($request->fechaNac);
        $persona->direccion = trim($request->direccion);
        $persona->telefono = trim($request->telefono);
        $persona->celular = trim($request->celular);
        $persona->carrera = trim($request->carrera);

        $user = new User();
        $persona->save();

        $user->name = trim($request->name);
        $user->email = trim(strtolower($request->email));
        $user->password = bcrypt(trim($request->password));
        $user->estado = 1;
        $user->persona()->associate($persona);
        $user->save();
        $user->persona;
        $user->roles()->sync($request->role);
        $user->role;
        return response()->json(compact('user'));
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
    
    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse\
     */
    public function role()
    {
        $role = Role::all();

        return response()->json(compact('role'));
    }
}
