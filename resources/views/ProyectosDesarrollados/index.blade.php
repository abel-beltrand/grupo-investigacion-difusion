@extends('layouts.template')
@section('title','Proyectos Desarrollados del GI')
@section('header', 'Proyectos Desarrollados')
@section('content')
    <div class="container">
        <h4>Actividad de tutelaje del GI ordenados por año</h4>
        <ul class="listas">
            @foreach ($anios as $anio)
            <li>
                <a href="{{route('proyectos-desarrollados.show', $anio->anio)}}">{{$anio->anio}}</a>
            </li>
            @endforeach
        </ul>
    </div> 
@endsection