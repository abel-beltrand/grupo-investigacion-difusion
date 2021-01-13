@extends('layouts.template')
@section('title','Gestiones Académicas del GI')
@section('header', 'Gestión Académica')
@section('content')
    <div class="container">
        <h4>Gestión Académica del GI ordenados por año</h4>
        <ul class="listas">
            @foreach ($anios as $anio)
            <li>
                <a href="{{route('gestion-academica.show', $anio->anio)}}">{{$anio->anio}}</a>
            </li>
            @endforeach
        </ul>
    </div> 
@endsection