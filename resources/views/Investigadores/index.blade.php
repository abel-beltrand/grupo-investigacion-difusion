@extends('layouts.template')
@section('title',' Investigadores del Grupo de Investigación: Computación para la Innovación de Ambientes Educativos :: UAEH')
@section('header', 'Investigadores')
@section('content')
  <div class="pagina">
    <div class="inner-wrap">
      <div class="div-investigador-container">
        <figure>
          <img src="{{asset('img/MAAL_.png')}}" class="img-investigador-container" />
          <br>
        <figcaption> <a href="{{route('investigadores.maal')}}" id="investigador1">Dra. Alonso Lavernia María de los Angeles</a></figcaption>
        </figure>
        <figure>
          <img src="{{asset('img/ICP.png')}}" class="img-investigador-container" />
          <br>
          <figcaption> <a href="{{route('investigadores.cpi')}}" id="investigador2">M.C.C. Castillo Pérez Iliana</a></figcaption>
        </figure>
        <figure>
          <img src="{{asset('img/MLV.jpg')}}" class="img-investigador-container" />
          <br>
          <figcaption> <a href="{{route('investigadores.mlv')}}" id="investigador3">Mtra. Martinez Lazcano Verónica</a></figcaption>
        </figure>
        <figure>
          <img src="{{asset('img/YMS.jpg')}}" class="img-investigador-container" />
          <br>
          <figcaption><a href="{{route('investigadores.msy')}}" id="investigador4">M.C.C. Muñoz Sanchez Yira</a></figcaption>
        </figure>
      </div>
    </div>
  </div>
@endsection