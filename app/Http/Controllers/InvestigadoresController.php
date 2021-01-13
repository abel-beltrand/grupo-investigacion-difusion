<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvestigadoresController extends Controller
{
    public function index(){
        return view('Investigadores.index');
    }

    public function create(){
        return "Página para crear páginas de investigadores";
    }
    public function maal(){
        return view('Investigadores.maal');

    }
    public function cpi(){
        return view('Investigadores.cpi');

    }
    public function mlv(){
        return view('Investigadores.mlv');

    }
    public function msy(){
        return view('Investigadores.msy');

    }
}
