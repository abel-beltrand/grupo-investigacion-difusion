@extends('layouts.template')g
@section('title','Participaciones con otros CA del GI')
@section('header', 'Participaciones con otros CA')
@section('content')
    <div class="container">
        <h4>Participaciones con otros CA del GI ordenados por año</h4>
        <ul class="listas">
            @foreach ($anios as $anio)
            <li>
                <a href="{{route('participacion-con-otras-ca.show', $anio->anio)}}">{{$anio->anio}}</a>
            </li>
            @endforeach
        </ul>
    </div> 
@endsection