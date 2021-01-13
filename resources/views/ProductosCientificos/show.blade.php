@extends('layouts.template')
@section('title','Productos Científicos del GI')
@section('header', 'Productos Científicos durante ' .$anio)
@section('content')
    <div class="container">
        <br>
        <table>
            <thead>
                <th>Tipo de Producto</th>
                <th>Título</th>
                <th>Lugar</th>
                <th>Fecha</th>
                <th>Líneas</th>
            </thead>
            <tbody>
                @foreach ($productosc as $productoc)
                    <tr>
                        <td>{{$productoc->tipo_producto}}</td>
                        <td>{{$productoc->titulo}}</td>
                        <td>{{$productoc->lugar}}</td>
                        <td>{{$productoc->fecha}}</td>
                        <td>{{$productoc->linea}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection