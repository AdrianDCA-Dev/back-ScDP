<?php

namespace App\Http\Controllers\Api;

use App\Carrera;
use App\Facultade;
use App\Tema;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FacultadCarrera extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facultad = Facultade::all();

        return response()->json(compact('facultad'));
    }

    public function carrerafacultad($id)
    {
        $carrera = Carrera::where('facultad_id', '=', $id)->get();

        return response()->json(compact('carrera'));
    }

    public function reportemas()
    {
        $tema = Tema::all();
        $tema->each(function ($tema){
            $tema->inscripcion->user->persona->carrera->facultad;
        });

        return response()->json(compact('tema'));
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
        //
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
