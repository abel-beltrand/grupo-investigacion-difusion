<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapaDelSitioController extends Controller
{
    public function __invoke()
    {
        return view('mapaSitio');
    }
}
