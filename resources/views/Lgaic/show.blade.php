@extends('layouts.template')
@section('title','LGAIC del GI: Computación para la Innovación de Ambientes Educativos :: UAEH')
@section('header', 'Líneas de Generación y Aplicación Innovadora del Conocimiento')
@section('content')
    <div class="container">
        <br>
        <table>
            <thead>
                <th>Nombre</th>
                <th>Descripcion</th>
            </thead>
            <tbody>
                @foreach ($lineas as $linea)
                    <tr>
                        <td><h4>{{$linea->linea}}</h4></td>
                        <td><h4>{{$linea->descripcion}}</h4></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection