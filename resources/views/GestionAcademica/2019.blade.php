@extends('layouts.template')
@section('title','Gestión Académica')
@section('header', 'Gestión Académica 2019')
@section('content')
    <div class="container">
        <br>
        <table>
            <thead>
                <th>Responsabilidad</th>
                <th>Función encomendads</th>
                <th>Tipo</th>
                <th>Integrantes</th>
            </thead>
            <tbody>
                @foreach ($gestiones as $gestion)
                <tr>
                    <td>{{$gestion->responsabilidad}}</td>
                    <td>{{$gestion->funcionEncomendada}}</td>
                    <td>{{$gestion->tipo}}</td>
                    <td>{{$gestion->integrantes}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection