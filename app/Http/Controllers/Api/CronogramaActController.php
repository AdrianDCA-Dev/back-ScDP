<?php

namespace App\Http\Controllers\Api;

use App\CronogramaActividades;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CronogramaActController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cronoAct = CronogramaActividades::all();

        return response()->json(compact('cronoAct'));
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
        $cronoAct = new CronogramaActividades();
        $cronoAct->title = trim($request->title);
        $cronoAct->descripcion = trim($request->descripcion);
        $cronoAct->color = trim($request->color);
        $cronoAct->textColor = trim($request->textColor);
        $cronoAct->start = trim($request->start);
        $cronoAct->end = trim($request->end);
        $cronoAct->save();

        return response()->json(compact('cronoAct'));
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
        $cronoAct = CronogramaActividades::find($id);
        $cronoAct->title = trim($request->title);
        $cronoAct->descripcion = trim($request->descripcion);
        $cronoAct->color = trim($request->color);
        $cronoAct->textColor = trim($request->textColor);
        $cronoAct->start = trim($request->start);
        $cronoAct->end = trim($request->end);
        $cronoAct->save();

        return response()->json(compact('cronoAct'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cronoAct = CronogramaActividades::find($id);
        $cronoAct->delete();

        return response()->json('borrado');
    }
}
