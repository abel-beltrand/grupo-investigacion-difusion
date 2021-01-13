@extends('layouts.template')
@section('title','Actividad Docente del GI')
@section('header', 'Actividad Docente durante ' .$anio)
@section('content')
    <div class="container">
        <br>
        <table>
            <thead>
                <th>Materia</th>
                <th>Programa Educativo</th>
                <th>Integrantes</th>
                <th>Líneas</th>
            </thead>
            <tbody>
                @foreach ($actividades as $actividad)
                    <tr>
                        <td>{{$actividad->materia}}</td>
                        <td>{{$actividad->programa_educativo}}</td>
                        <td>{{$actividad->nombre_integrante}}</td>
                        <td>{{$actividad->linea}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection