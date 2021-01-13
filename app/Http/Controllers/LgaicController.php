<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Linea;
use Illuminate\Http\Request;

class LgaicController extends Controller
{
    public function show(){
        $lineas = Linea::select('linea', 'descripcion')->get();
        return view('Lgaic.show', compact('lineas'));
    }

    public function create(){
        return view('Lgaic.create');
    }
}
