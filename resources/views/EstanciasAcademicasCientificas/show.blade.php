@extends('layouts.template')
@section('title','Estancias Académicas y Científicas del GI')
@section('header', 'Estancias académicas y científicas durante ' .$anio)
@section('content')
    <div class="container">
        <br>
        <table>
            <thead>
                <th>Institución</th>
                <th>Propósito</th>
                <th>Fecha de inicio</th>
                <th>Fecha de finalización</th>
                <th>Líneas</th>
            </thead>
            <tbody>
                @foreach ($estancias as $estancia)
                    <tr>
                        <td>{{$estancia->institucion}}</td>
                        <td>{{$estancia->proposito}}</td>
                        <td>{{$estancia->fecha_inicio}}</td>
                        <td>{{$estancia->fecha_fin}}</td>
                        <td>{{$estancia->linea}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection