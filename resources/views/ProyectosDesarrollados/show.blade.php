@extends('layouts.template')
@section('title','Proyectos Desarrollados')
@section('header', 'Proyectos Desarrollados durante ' .$anio)
@section('content')
    <div class="container">
        <br>
        <table>
            <thead>
                <th>Título</th>
                <th>Fuente de Financiamiento</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Fninalización</th>
                <th>Líneas</th>
            </thead>
            <tbody>
                @foreach ($proyectos as $proyecto)
                    <tr>
                        <td>{{$proyecto->titulo}}</td>
                        <td>{{$proyecto->fuente}}</td>
                        <td>{{$proyecto->fecha_inicio}}</td>
                        <td>{{$proyecto->fecha_fin}}</td>
                        <td>{{$proyecto->linea}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection