@extends('layouts.template')
@section('title',' Investigadores del Grupo de Investigación: Computación para la Innovación de Ambientes Educativos :: UAEH')
@section('header', 'Investigadora')
@section('content')
<div class="encabezado-investigador">
    <div class="elemento-imagen">
        <img src="{{asset('img/ICP.png')}}" class="img-investigador-encabezado">
    </div>
    <div class="elemento-texto"><br><br>
        M.C.C.
        <h3>Iliana Castillo Pérez</h3>
    </div>
</div>
<div class="contenedor-a">
  <a class="boton-a" href="{{route('investigadores.index')}}">Regresar</a>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-8 col-md-7 texto-inv">
    <p><br>
      Ha laborado para la industria privada principalmente en el desarrollo de sistemas de apoyo a la administración y para el control de información 
      en la industria del entretenimiento. De 2007 a la fecha ha laborado en la Universidad Autónoma del Estado de Hidalgo, es Profesor con Perfil PRODEP, esta adscrita a la línea de investigación de Innovación para las Tendencias Educativas del grupo de Investigación en Computación para la Innovación en Ambientes Educativos. La Mtra. ha dirigido tesis en 
      la Licenciatura en Sistemas Computacionales y la Licenciatura en Ciencias Computacionales de la UAEH. Fue por algunos años encargada de los procesos de Becas y Titulación, así como de los programas de Tutorías y Asesorías de la Licenciatura en Sistemas Computacionales. También Coordinó el PE de Licenciatura en Ingeniería en Electrónica, fue Coordinadora 
      del Programa de Maestría en Ciencias Computacionales y Coordinadora de la Licenciatura en Ciencias Computacionales. Ha participado en proyectos de investigación financiados por CONACYT. Su participación en Congresos Nacionales e Internacionales se ha realizado bajo las temáticas de Sistemas Multi-Agentes, Objetos de Aprendizaje, entre otros 
      temas del área de la educación. Fue miembro del Consejo Técnico del Examen General para el Egreso de la Licenciatura en Ingeniería Computacional (EGEL-ICOMPU), en carácter de representante del Instituto de Ciencias Básicas e ingeniería de la Universidad Autónoma del Estado de Hidalgo. La Mtra. Castillo es catedrático en la Licenciatura en Ciencias Computacionales 
      de la UAEH. Ha tomado cursos de superación académica con temas de Ambientes virtuales de aprendizaje, Aplicación de estrategias didácticas para el desarrollo de programas de asignatura, Concepción de competencias para la educación superior, Elaboración de unidades de aprendizaje y trabajo, Evaluación del aprendizaje desde los fundamentos del modelo curricular integral, 
      Organización didáctica del proceso centrado en el aprendizaje del estudiante, La personalidad en las distintas etapas de la vida, Programación Neuro Lingüística en el ejercicio docente, Cambio metodológico para promover el desarrollo de competencias, couching educativo, neuroaprendizaje,  así como sobre diversas temáticas sobre la labor tutoral y el desarrollo de competencias.
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
            Técnico Docente Titular de Tiempo Completo Nivel “B”, adscrita al Área Académica de Computación y Electrónica del Instituto de Ciencias Básicas e Ingeniería de la Universidad Autónoma del Estado de Hidalgo desde el 21 de enero de 2007.
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
              <li>- Profesional: Universidad Autónoma del Estado de Hidalgo. México. Título: Licenciada en Computación.</li>
              <li>- Grados académicos:Maestra en Ciencias Computacionales. Grado otorgado por la Universidad Autónoma del Estado de Hidalgo, el 14 de noviembre del 2007.</li>
              
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
              <li>- Computación educativa</li>
              <li>- Objetos de aprendizaje</li>
              <li>- NeuroAprendizaje</li>
              <li>- Innovación educativa</li>
              <li>- Sistemas Multi-Agentes</li>
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
            <p><b>Electrónico:</b> ilianac@uaeh.edu.mx</p>
            <p><b>Teléfono del trabajo</b>: 71 72000 ext. 6734</p>
            <p><b>Ubicación de la oficina:</b> Cubículo 21 de Profesor Investigador ubicado en CITIS,
                 Instituto de Ciencias Básicas e Ingeniería, Carretera Pachuca – Tulancingo Km. 4.5,
                Ciudad del Conocimiento, Colonia Carboneras, Mineral de la Reforma, Hidalgo, México, C.P. 42184.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<script src="{{asset('js/Acordeon.js')}}"></script>
@endsection