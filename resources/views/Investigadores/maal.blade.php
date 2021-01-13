@extends('layouts.template')
@section('title',' Investigadores del Grupo de Investigación: Computación para la Innovación de Ambientes Educativos :: UAEH')
@section('header', 'Investigadora')
@section('content')
<div class="encabezado-investigador">
    <div class="elemento-imagen">
        <img src="{{asset('img/MAAL_.png')}}" class="img-investigador-encabezado">
    </div>
    <div class="elemento-texto"><br><br>
          Doctora
        <h3>  Alonso Lavernia María de los Angeles</h3>
    </div>
</div>
<div class="contenedor-a">
  <a class="boton-a" href="{{route('investigadores.index')}}">Regresar</a>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-8 col-md-7 texto-inv">
    <p><br>
      Ha laborado en el Instituto de Cibernética, Matemática y Física de la Academia de Ciencias de Cuba, 
      en el Centro de Investigación en Computación del Instituto Politécnico Nacional en México y actualmente,
      en la Universidad Autónoma del Estado de Hidalgo, en México. En esta última institución, ha coordinado la
      Maestría en Ciencias Computacionales, Maestría en Tecnologías de la Información para la Educación y el 
      Centro de Innovación para el desarrollo y la Capacitación en Materiales Educativos, dirige el Grupo de 
      Investigación Tecnología Computacional Educativa y se desempaña asiduamente como evaluadora de revistas 
      y congresos nacionales e internacionales. Sus áreas de investigación y desarrollo son Inteligencia Artificial, 
      Minería de Datos y Tecnología y Evaluación Educativa. 
      Los reconocimientos más relevantes obtenidos son: Ponencia destacada en la contribución al desarrollo 
      científico-técnico del país, en el Fórum Nacional de Ciencia y Técnica en Cuba, Honorable Educador Iberoamericano,
       premio internacional otorgado por el Consejo Iberoamericano en Honor a la Calidad Educativa en Perú y el primer lugar
      de la Convocatoria Mujeres Mexicanas Inventoras e Innovadoras, en la Categoría Social y Educativa en Invención, otorgado 
      por el Instituto Nacional de las Mujeres, Consejo Nacional de Ciencia y Tecnología, Academia Mexicana de Ciencias y el 
      Instituto Politécnico Nacional.
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
            Profesora-Investigadora Titular B de Tiempo Completo, adscrita al Área Académica de Computación y Electrónica 
            del Instituto de Ciencias Básicas e Ingeniería, de la Universidad Autónoma del Estado de Hidalgo desde el 1ro de septiembre de 1999.
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
              <li>-Profesional: Instituto Superior Politécnico “José Antonio Echeverría”. Cuba.  Título: Ingeniero Electricista.Grados Científicos:</li>
              <li>-Maestra en Informática Aplicada a la Ingeniería y la Arquitectura. Grado otorgado por el Instituto Superior Politécnico José Antonio Echeverría, Ciudad de La Habana, Cuba, el 20 de Diciembre de 1996.</li>
              <li>-Magíster en Gestión Educativa. Grado otorgado por el Consejo Iberoamericano en Honor a la Calidad Educativa, Perú, el 2 de Julio de 2004.</li>
              <li>-Doctora en Ciencias de la Computación. Grado otorgado por el Centro de Investigación en Computación (CIC). Instituto Politécnico Nacional (IPN). México, DF, el 8 de Diciembre de 2006.</li>
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
              <li>-Inteligencia Artificial</li>
              <li>-Minería de datos</li>
              <li>-Computación edicativa</li>
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
            <p><b>Correo Electrónico:</b>  marial@uaeh.edu.mx</p>
            <p><b>Teléfono del trabajo:</b>  (771) 71 72000 ext 2244</p>
            <p><b>Celular:</b> (771) 123 1386</p>
            <p><b>Ubicación de la oficina:</b> Cubículo 7 del Área Académica de Computación y Electrónica,
              Instituto de Ciencias Básicas e Ingeniería Ciudad del Conocimiento, Mineral de la Reforma, Hidalgo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<script src="{{asset('js/Acordeon.js')}}"></script>
@endsection



  