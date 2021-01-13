@extends('layouts.template')
@section('title','Actualización de Posgrados')
@section('header', 'Actualización de Posgrados')
@section('content')
    <div class="container">
        <h4>Actualizaciones de Posgrados por año</h4>
        <ul class="listas">
            @foreach ($anios as $anio)
            <li>
                <a href="{{route('actualizacion-de-posgrados.show', $anio->anio)}}">{{$anio->anio}}</a>
            </li>
            @endforeach
        </ul>
    </div> 
@endsection