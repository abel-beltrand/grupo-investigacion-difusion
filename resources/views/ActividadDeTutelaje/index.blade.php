@extends('layouts.template')
@section('title','Actividades de Tutelaje del GI')
@section('header', 'Actividades de Tutelaje')
@section('content')
    <div class="container">
        <h4>Actividad de tutelaje del GI ordenados por año</h4>
        <ul class="listas">
            @foreach ($anios as $anio)
            <li>
                <a href="{{route('actividades-de-tutelaje.show', $anio->anio)}}">{{$anio->anio}}</a>
            </li>
            @endforeach
        </ul>
    </div> 
@endsection