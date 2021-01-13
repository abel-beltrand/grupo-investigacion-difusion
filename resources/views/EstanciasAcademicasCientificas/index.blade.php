@extends('layouts.template')g
@section('title','Estancias Académicas y Científicas del GI')
@section('header', 'Estancias Académicas y Científicas')
@section('content')
    <div class="container">
        <h4>Estancias Académicas y Científicas del GI ordenados por año</h4>
        <ul class="listas">
            @foreach ($anios as $anio)
            <li>
                <a href="{{route('estancias-academicas-y-cientificas.show', $anio->anio)}}">{{$anio->anio}}</a>
            </li>
            @endforeach
        </ul>
    </div> 
@endsection