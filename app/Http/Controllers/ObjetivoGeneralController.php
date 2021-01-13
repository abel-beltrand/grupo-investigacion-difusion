<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Objetivo;
use Illuminate\Http\Request;

class ObjetivoGeneralController extends Controller
{
    public function show()
    {
        $objetivos = Objetivo::select('descripcion')->get();
        return view('ObjetivoGeneral.show', compact('objetivos'));
    }

    public function create()
    {
        return view('ObjetivoGeneral.create');
    }
}
