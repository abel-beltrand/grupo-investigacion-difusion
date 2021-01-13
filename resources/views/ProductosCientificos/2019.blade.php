@extends('layouts.template')
@section('title',' Productos Científicos del GI durante el 2019')
@section('header', 'Productos científicos desarrollados durante 2019')
@section('content')
    <div class="container">
        <br>
        <table>
            <thead>
                <th>Tipo</th>
                <th>Titulo</th>
                <th>Integrantes</th>
                <th>Lugar de Publicación</th>
                <th>Fecha de Publicación</th>
                <th>Líneas</th>
            </thead>
            <tbody>
                @foreach ($productosc as $productoc)
                    <tr>
                        <td>{{$productoc->tipo}}</td>
                        <td>{{$productoc->titulo}}</td>
                        <td>{{$productoc->integrantes}}</td>
                        <td>{{$productoc->lugar}}</td>
                        <td>{{$productoc->fecha}}</td>
                        <td>{{$productoc->lineas}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection