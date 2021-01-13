@extends('layouts.template')g
@section('title','Proyectos de estudiantes')
@section('header', 'Proyectos de Estudiantes')
@section('content')
    <div class="container">
        <h4>Proyectos de estudiantes ordenados por año</h4>
        <ul class="listas">
            @foreach ($anios as $anio)
            <li>
                <a href="{{route('proyectos-de-estudiantes.show', $anio->anio)}}">{{$anio->anio}}</a>
            </li>
            @endforeach
        </ul>
    </div> 
@endsection