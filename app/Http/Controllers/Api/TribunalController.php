<?php

namespace App\Http\Controllers\Api;

use App\Defensa;
use App\Tribunales;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TribunalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tribunal = Tribunales::all();
        $tribunal->each(function ($tribunal){
            $tribunal->user->persona;
            $tribunal->defensa->inscripcion->user->persona;
            $tribunal->defensa->inscripcion->modalidad;
        });

        return response()->json(compact('tribunal'));
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
        $tribunales = json_decode(json_encode($request->tribunal));
        foreach ($tribunales as $item){
            $tribunal = new Tribunales();
            $tribunal->user()->associate($item->user_id);
            $tribunal->defensa()->associate($item->defensa_id);
            $tribunal->descripcion = trim($item->descripcion);
            $tribunal->save();
            $user = User::find($item->user_id);

            $user->roles()->sync([2,5]);
            //$defensa = Defensa::where('inscripcion_id', '=', $control->inscripcion_id)->update($defensaData);
        }

        return response()->json(compact('tribunal'));
    }

    public function defensaUnoAprobado()
    {
        $defunoapro = Defensa::where('estado', '=', 'AprobadoUno')->get();
        $defunoapro->each(function ($defunoapro){
            $defunoapro->inscripcion->user->persona;
            $defunoapro->inscripcion->modalidad;
            $defunoapro->cronograma;
        });

        return response()->json(compact('defunoapro'));
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
        $tribunales = Tribunales::find($id);

        $tribunales->user()->associate($request->user_id);
        $tribunales->save();

        return response()->json(compact('tribunales'));
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
