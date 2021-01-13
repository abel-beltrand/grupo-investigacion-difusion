@extends('layouts.template')
@section('title','Actualizaciones de PE durante' .$anio)
@section('header', 'Actualizaciones de PE durante ' .$anio)
@section('content')
    <div class="container">
        <br>
        <table>
            <thead>
                <th>Programa Educativo</th>
                <th>Fecha de Implementación</th>
                <th>Año</th>
            </thead>
            <tbody>
                @foreach ($actualizaciones as $actualizacion)
                    <tr>
                        <td>{{$actualizacion->programa_educativo}}</td>
                        <td>{{$actualizacion->fecha_implementacion}}</td>
                        <td>{{$actualizacion->anio}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection