@extends('layouts.template')
@section('title','Participaciones del GI con otros CA en ' .$anio)
@section('header', 'Participaciones con otros CA durante ' .$anio)
@section('content')
    <div class="container">
        <br>
        <table>
            <thead>
                <th>Nombre Participación</th>
                <th>Tipo de Participación</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Finalización</th>
            </thead>
            <tbody>
                @foreach ($participaciones as $participacion)
                    <tr>
                        <td>{{$participacion->nombre_participacion}}</td>
                        <td>{{$participacion->tipo_participacion_ca}}</td>
                        <td>{{$participacion->fecha_inicio}}</td>
                        <td>{{$participacion->fecha_fin}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection