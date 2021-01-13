@extends('layouts.template')
@section('title',' Investigadores del Grupo de Investigación: Computación para la Innovación de Ambientes Educativos :: UAEH')
@section('header', 'Investigadora')
@section('content')
<div class="encabezado-investigador">
    <div class="elemento-imagen">
        <img src="{{asset('img/MLV.jpg')}}" class="img-investigador-encabezado">
    </div>
    <div class="elemento-texto"><br><br>
        Maestra
        <h3>Martinez Lazcano Verónica</h3>
    </div>
</div>
<div class="contenedor-a">
  <a class="boton-a" href="{{route('investigadores.index')}}">Regresar</a>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-8 col-md-7 texto-inv">
    <p><br>
      Ha laborado en la Universidad Autónoma del Estado de Hidalgo, en México. En esta institución, ha sido directora del Centro de Cómputo Académico, Coordinadora De Vinculación del Área Académica de Computación y Electrónica (AACyE), Coordinadora de Extensión del AACyE y Coordinadora de Investigación del AACyE, actualmente Profesora- investigadora del AACyE, miembro del Grupo de Investigación de Tecnología Computacional Educativa y miembro activo de la Red de Docentes de América Latina y el Caribe. 
      Los reconocimientos más relevantes obtenidos son: 
      Reconocimiento a perfil deseable para profesores de tiempo completo a través del Programa de Mejoramiento del Profesorado (PROMEP), otorgado por la Subsecretaría de Educación Superior desde 2011 hasta la fecha.
    </p>
  </div>
  <div class="col-xs-12 col-sm-4 col-md-5">
    <div class="accordion">
      <div class="accordion-item">
        <div class="accordion-item-header">
          Información Académica
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            Profesora-Investigadora Titular A de Tiempo Completo, adscrita al Área Académica de Computación y Electrónica del Instituto de Ciencias Básicas e Ingeniería, de la Universidad Autónoma del Estado de Hidalgo.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-item-header">
          Grado
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <ul style="padding-left: 1rem;">
              <li>-Profesional: Universidad Autónoma del Estado de Hidalgo. Hidalgo, México.  
                Título: Licenciatura en Computación.</li>
              <li>-Grados Científicos: Maestría en Ciencias de la Computación. Grado otorgado por el Instituto Tecnológico y de Estudios Superiores de Monterrey, Pachuca, Hidalgo, el 29 de noviembre de 1999. </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-item-header">
          Áreas de interes
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <ul style="padding-left: 1rem;">
              <li>-Computación Educativa</li>
              <li>-Sistemas y Ambientes Educativos</li>
              <li>-Tecnología Educativa</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-item-header">
          Contacto
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <p><b>Electrónico:</b> vlazcano@uaeh.edu.mx</p>
            <p><b>Teléfono del trabajo</b>: (771) 71 72000 ext 6734 </p>
            <p><b>Ubicación de la oficina:</b> Cubículo 34 del Área Académica de Computación y Electrónica,
              Instituto de Ciencias Básicas e Ingeniería 
              Ciudad del Conocimiento, Mineral de la Reforma, Hidalgo
               </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br>
<script src="{{asset('js/Acordeon.js')}}"></script>
@endsection