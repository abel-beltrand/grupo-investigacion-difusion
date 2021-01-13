@extends('layouts.template')
@section('title','Objetivo General del GI: Computación para la Innovación de Ambientes Educativos :: UAEH')
@section('header', 'Objetivo General')
@section('content')
    <div class="container">
        <br>
        <ul>
            @foreach ($objetivos as $objetivo)
                  <li><h3>{{$objetivo->descripcion}}</h3></li>             
            @endforeach
        </ul>
    </div>
@endsection