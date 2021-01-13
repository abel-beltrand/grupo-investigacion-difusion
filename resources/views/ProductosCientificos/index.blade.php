@extends('layouts.template')g
@section('title','Productos Científicos del GI')
@section('header', 'Productos Científicos')
@section('content')
    <div class="container">
        <h4>Productos Científicos del GI ordenados por año</h4>
        <ul class="listas">
            @foreach ($anios as $anio)
            <li>
                <a href="{{route('productos-cientificos.show', $anio->anio)}}">{{$anio->anio}}</a>
            </li>
            @endforeach
        </ul>
    </div> 
@endsection