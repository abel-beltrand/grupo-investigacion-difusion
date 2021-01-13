@extends('layouts.template')
@section('title',' Investigadores del Grupo de Investigación: Computación para la Innovación de Ambientes Educativos :: UAEH')
@section('header', 'Investigadora')
@section('content')
<div class="encabezado-investigador">
    <div class="elemento-imagen">
        <img src="{{asset('img/YMS.jpg')}}" class="img-investigador-encabezado">
    </div>
    <div class="elemento-texto"><br><br>
        M.C.C.
        <h3>Muñoz Sanchez Yira</h3>
    </div>
</div>
<div class="contenedor-a">
  <a class="boton-a" href="{{route('investigadores.index')}}">Regresar</a>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-8 col-md-7 texto-inv">
    <p><br>
      Cuenta con el perfil deseable, reconocimiento otorgado por PRODEP.
      Ha sido profesora en diversas instituciones educativas de nivel superior y ha impartido clases en nivel profesional y posgrado en modalidad presencial, b-learning y virtual.
      En la Universidad Autónoma del Estado de Hidalgo ha impartido clases en los siguientes programas educativos:
      cenciatura en Sistemas Computacionales
      cenciatura en Matemáticas Aplicadas
      Licenciatura en Ingeniería Mecánica
      Especialidad en Planeación y Sistemas
      Maestría en Ciencias Computacionales
      Maestría en Tecnologías de la Información para la Educación
      Actualmente trabaja en el Grupo de Investigación Tecnología Computacional Educativa.
      Ha sido integrante del Comité Institucional de Evaluación Docente, ha sido coordinadora de la Licenciatura en Ingeniería Mecánica, en la Escuela Superior de Cd. Sahagún, del 2012 al 2013 y del 2014 hasta la actualidad. En el segundo periodo el programa educativo fue reconocido por los CIEES, (Comités Insterinstitucionales para la Evaluación de la Educación Superior), con nivel 1.
      Fue Coordinadora de la Licenciatura en Sistemas Computacionales de la Escuela Superior de Tlahuelilpan en el ciclo Octubre 2007 – Septiembre 2011; periodo en el que el programa educativo obtuvo el nivel 1 por los CIEES con el nivel 1 y fue acreditado por el Consejo Nacional Acreditación en Informática y Computación, CONAIC.
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
            Pofesora Investigadora Titular A de tiempo Completo, adscrita a la Escuela Superior de Tlahuelilpan, en la Licenciatura en Sistemas Computacionales de Mayo del 2007 a Junio de 2012, actualmente adscrita a la Escuela Superior de Ciudad Sahagún en la Licenciatura en Ingeniería Mecánica, desde mayo del 2012, de Universidad Autónoma del Estado de Hidalgo.
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
              <li>- Profesional: Universidad Autónoma del Estado de Hidalgo. Título: Licenciada en Computación</li>
              <li>- Maestra en Ciencias Computacionales, con especialidad en Ingeniería de Software. Grado otorgado por la Universidad Autónoma del Estado de Hidalgo.</li>
              <li>- Ha cursado estudios en modalidad virtual sobre Tecnología Educativa y sobre Formación de Docentes en el enfoque CTS; éste último por la Universidad de Oviedo, España</li>
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
              <li>- Objetos de Aprendizaje</li>
              <li>- Ingeniería de Software para sistemas educativos</li>
              <li>- Sistemas Multimedia e Hipermedia educativos</li>
              <li>- Innovación educativa</li>
              <li>- Diseño Instruccional </li>
              <li>- Diseño Instruccional Adaptativo</li>
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
            <p><b>Electrónico:</b> yira@uaeh.edu.mx</p>
            <p><b>Teléfono del trabajo</b>: (771) 71 72000 ext 5300 </p>
            <p><b>Celular:</b> 7731013363</p>
            <p><b>Ubicación:</b>  Carretera Cd. Sahagún-Otumba s/n, Zona Industrial, Cd. Sahagún, Hidalgo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br><br><br>

<script src="{{asset('js/Acordeon.js')}}"></script>
@endsection