@extends('layouts.template')
@section('title','Actividad Docente del GI')
@section('header', 'Actividad Docente')
@section('content')
    <div class="container">
        <h4>Actividad Docente del GI ordenados por año</h4>
        <ul class="listas">
            @foreach ($anios as $anio)
            <li>
                <a href="{{route('actividad-docente.show', $anio->anio)}}">{{$anio->anio}}</a>
            </li>
            @endforeach
        </ul>
    </div> 
@endsection