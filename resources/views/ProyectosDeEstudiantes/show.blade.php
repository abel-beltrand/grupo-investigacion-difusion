@extends('layouts.template')
@section('title','Proyectos de estudiantes en ' .$anio)
@section('header', 'Proyectos de Estudiantes del ' .$anio)
@section('content')
    <div class="container">
        <br>
        <table>
            <thead>
                <th>Programa Educativo</th>
                <th>Título</th>
                <th>Estado</th>
                <th>Líneas</th>
            </thead>
            <tbody>
                @foreach ($proyectos as $proyecto)
                    <tr>
                        <td>{{$proyecto->programa_educativo}}</td>
                        <td>{{$proyecto->titulo}}</td>
                        <td>{{$proyecto->estado}}</td>
                        <td>{{$proyecto->linea}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection