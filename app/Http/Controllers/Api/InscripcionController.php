<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inscripciones;
use App\Tema;
use App\Tutores;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
            $inscripcion->tema->inscripcion->user->persona->carrera;
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
        $inscripcion->fecha = Carbon::now()->toDateTimeString();
        $inscripcion->estado = 1;

        
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
        $tutor->tema->inscripcion->user->persona->carrera;
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
        $inscripcion = Inscripciones::find($id);
        $inscripcion->user_id = trim($request->user_id_ins);
        $inscripcion->modalidad_id = trim($request->modalidad_id);
        $inscripcion->fecha = Carbon::now()->toDateTimeString();
        $inscripcion->estado = trim($request->estado);
        $inscripcion->save();

        $temaData = [
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion_ins,
        ];
        $temaupdate = Tema::where('inscripcion_id', '=', $inscripcion->id)->update($temaData);

        $tema = Tema::where('inscripcion_id', '=', $inscripcion->id)->get();
        /* Realizar actualizacion de tutor
         * $tutorData = [
            'user_id' => $request->user_id_tu,
            'descripcion' => $request->descripcion_tu,
        ];
        $tutorupdate = Tutores::where('tema_id', '=', $tema->id)->update($tutorData);*/

        return response()->json('full');
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
