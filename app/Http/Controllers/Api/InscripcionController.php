<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inscripciones;
use App\Tema;
use App\Tutores;
use Illuminate\Support\Facades\DB;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscripcion = Tutores::all();
        $inscripcion->each(function ($inscripcion){
            $inscripcion->tema->inscripcion->user->persona;
            $inscripcion->tema->inscripcion->modalidad;
            $inscripcion->user->persona;
        });
        return response()->json(compact('inscripcion'));
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
        $inscripcion = new Inscripciones();
        $inscripcion->user_id = trim($request->user_id_ins);
        $inscripcion->modalidad_id = trim($request->modalidad_id);
        $inscripcion->fecha = trim($request->fecha);
        $inscripcion->estado = "Activo";

        
        $tema = new Tema();
        $inscripcion->save();
        
        $tema->inscripcion()->associate($inscripcion);
        $tema->nombre = trim($request->nombre);
        $tema->descripcion = trim($request->descripcion_ins);

        $tutor = new Tutores();
        $tema->save();

        $tutor->user_id = trim($request->user_id_tu);
        $tutor->tema()->associate($tema);
        $tutor->descripcion = trim($request->descripcion_tu);

        $tutor->save();
        $tutor->tema->inscripcion->user->persona;
        $tutor->tema->inscripcion->modalidad;
        $tutor->user->persona;

        return response()->json(compact('tutor'));
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

    public function docente()
    {
        $docente = DB::select('SELECT * FROM users
                                    INNER JOIN role_user
                                    ON users.id = role_user.user_id
                                    INNER JOIN personas
                                    ON personas.id = users.persona_id
                                    INNER JOIN roles
                                    ON roles.id = role_user.role_id
                                    WHERE roles.id = 2');

        return response()->json(compact('docente'));
    }

    public function estudiante()
    {
        $estudiante = DB::select('SELECT * FROM users
                                    INNER JOIN role_user
                                    ON users.id = role_user.user_id
                                    INNER JOIN personas
                                    ON personas.id = users.persona_id
                                    INNER JOIN roles
                                    ON roles.id = role_user.role_id
                                    WHERE roles.id = 3');

        return response()->json(compact('estudiante'));
    }
}
