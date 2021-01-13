@extends('layouts.template')
@section('title','Actualización de PE')
@section('header', 'Actualización de PE')
@section('content')
    <div class="container">
        <h4>Actualizaciones de PE por año</h4>
        <ul class="listas">
            @foreach ($anios as $anio)
            <li>
                <a href="{{route('actualizacion-de-pe.show', $anio->anio)}}">{{$anio->anio}}</a>
            </li>
            @endforeach
        </ul>
    </div> 
@endsection