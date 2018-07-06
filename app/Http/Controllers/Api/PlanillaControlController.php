<?php

namespace App\Http\Controllers\Api;

use App\Controles;
use App\Inscripciones;
use App\Planilla;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use PhpParser\Comment\Doc;

class PlanillaControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $inscripto = Inscripciones::where('user_id', '=', $id)->first();
        $control = Controles::where('inscripcion_id', '=', $inscripto->id)->get();
        $control->each(function ($control){
            $control->planilla;
            $control->inscripcion->user->persona;
            $control->tutor->user->persona;
        });

        return response()->json(compact('control'));
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
        //$file = $request->file('contenido');
        //$name = 'informe_'.time().'.'.$file->getClientOriginalExtension();
        //$path = public_path('word');
        $doc = $request->file('contenido');
        //dd($doc);
        $planilla = new Planilla();
        $planilla->numero = trim($request->numero);
        $planilla->contenido = $doc->store('word', 'public');
        //$file->move($path, $name);
        //$planilla->contenido = $name;
        $planilla->fechaEntrega = Carbon::now()->toDateTimeString();;

        $control = new Controles();
        $planilla->save();
        $control->planilla()->associate($planilla);
        $control->inscripcion()->associate($request->inscripcion_id);
        $control->tutor()->associate($request->tutor_id);
        $control->descripcion = trim($request->descripcion);
        $control->estado = 'REVISION';
        $control->save();
        $control->planilla;
        $control->inscripcion->user->persona;
        $control->tutor->user->persona;
        return response()->json(compact('control'));
    }

    public function inscripcion($id)
    {
        $inscripto = Inscripciones::where('user_id', '=', $id)->get();
        $inscripto->each(function ($inscripto){
            $inscripto->user->persona;
        });

        return response()->json(compact('inscripto'));
    }

    public function tutor($id)
    {
        $tutor = DB::select('SELECT tutores.id, personas.nombre, personas.apellidos, tutores.user_id FROM inscripciones
                                        INNER JOIN temas
                                        ON temas.inscripcion_id = inscripciones.id
                                        INNER JOIN tutores
                                        ON tutores.tema_id = temas.id
                                        INNER JOIN users
                                        ON tutores.user_id = users.id
                                        INNER JOIN personas
                                        ON personas.id = users.persona_id
                                        WHERE inscripciones.user_id = ?',[$id]);

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
}
