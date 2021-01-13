@extends('layouts.template')
@section('title','Gestión Académica del GI durante ' .$anio)
@section('header', 'Gestión Académica del GI durante ' .$anio)
@section('content')
    <div class="container">
        <br>
        <table>
            <thead>
                <th>Responsabilidad</th>
                <th>Función Encomendada</th>
                <th>Tipo de gestión</th>
            </thead>
            <tbody>
                @foreach ($gestiones as $gestion)
                    <tr>
                        <td>{{$gestion->responsabilidad}}</td>
                        <td>{{$gestion->funcion_encomendada}}</td>
                        <td>{{$gestion->tipo_gestion}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection