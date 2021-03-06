<?php

namespace App\Http\Controllers\Api;

use App\Controles;
use App\CronogramaActividades;
use App\Inscripciones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ReportesController extends Controller
{
    public function inscrip()
    {
        $inscrip = Inscripciones::all();
        $inscrip->each(function ($inscrip){
            $inscrip->user->persona;
        });

        return response()->json(compact('inscrip'));
    }
    public function ReporteAA($id)
    {
        $reporaa = DB::select('SELECT controles.estado, personas.nombre, personas.apellidos FROM inscripciones
                                    INNER JOIN controles
                                    ON inscripciones.id = controles.inscripcion_id
                                    INNER JOIN users
                                    ON inscripciones.user_id = users.id
                                    INNER JOIN personas
                                    ON users.persona_id = personas.id
                                    WHERE inscripciones.id = ?',[$id]);

        return response()->json(compact('reporaa'));
    }

    public function ReporteC()
    {
        $reporcr = CronogramaActividades::all();

        return response()->json(compact('reporcr'));
    }

    public function ReporteDef()
    {

    }
}
