@extends('layouts.template')
@section('title','Actividades de tutelaje')
@section('header', 'Actividades de tutelaje durante ' .$anio)
@section('content')
    <div class="container">
        <br>
        <table>
            <thead>
                <th>Alumno</th>
                <th>Programa Educativo</th>
                <th>Tipo de Tutelaje</th>
                <th>Descripción</th>
                <th>Integrantes</th>
                <th>Líneas</th>
            </thead>
            <tbody>
                @foreach ($actividades as $actividad)
                    <tr>
                        <td>{{$actividad->alumno}}</td>
                        <td>{{$actividad->programa_educativo}}</td>
                        <td>{{$actividad->tipo_tutelaje}}</td>
                        <td>{{$actividad->descripcion}}</td>
                        <td>{{$actividad->nombre_integrante}}</td>
                        <td>{{$actividad->linea}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection