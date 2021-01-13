<!DOCTYPE html>
<html style="height: 100%" lang="es">
  <head>
    <!--Inicio Meta-->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="UAEH,universidad de excelencia,top public university,university excellence"/>
    <meta name="description" content="La Universidad Autónoma del Estado de Hidalgo (UAEH) es una de las mejores universidades de México. Como Institución Pública tiene un compromiso con su entorno y con la familia humana de la sociedad global. Para nosotros la educación con calidad y excelencia es un derecho fundamental y un bien público que pertenece a todas las personas"/>
    <meta name="author" content="Universidad Autónoma del Estado de Hidalgo" />
    <meta name="majestic-site-verification" content="MJ12_e01e609b-4a35-45ba-aef6-720ebe02f7f6"/>
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@UAEH_OFICIAL" />
    <meta name="twitter:title" content="Universidad Autónoma del Estado de Hidalgo :: UAEH"/>
    <meta name="twitter:description" content="La Universidad Autónoma del Estado de Hidalgo (UAEH) es una de las mejores universidades de México. Como Institución Pública tiene un compromiso con su entorno y con la familia humana de la sociedad global. Para nosotros la educación con calidad y excelencia es un derecho fundamental y un bien público que pertenece a todas las personas"/>
    <meta name="twitter:creator" content="@UAEH_OFICIAL" />
    <!-- Imagen con al menos 280x150px -->
    <meta name="twitter:image:src" content="https://www.uaeh.edu.mx/images/uaeh_logo_color.png"/>
    <!-- Open Graph data -->
    <meta property="og:title" content="Universidad Autónoma del Estado de Hidalgo :: UAEH"/>
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://www.uaeh.edu.mx/" />
    <meta property="og:image" content="https://www.uaeh.edu.mx/images/uaeh_logo_color.png"/>
    <meta property="og:description" content="La Universidad Autónoma del Estado de Hidalgo (UAEH) es una de las mejores universidades de México. Como Institución Pública tiene un compromiso con su entorno y con la familia humana de la sociedad global. Para nosotros la educación con calidad y excelencia es un derecho fundamental y un bien público que pertenece a todas las personas"/>
    <meta property="og:site_name" content="Universidad Autónoma del Estado de Hidalgo"/>
    <meta property="og:locale" content="es_MX"/>
    <meta property="article:publisher" content="https://www.facebook.com/OficialUAEH/"/>
    <meta property="article:section" content="Sitio web Institucional" />
    <meta property="article:tag" content="UAEH,universidad de excelencia,top public university,university excellence"/>
    <meta property="fb:admins" content="https://www.facebook.com/OficialUAEH/"/>
    <meta property="fb:app_id" content="175458819167210" />
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#800101"/>
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#800101" />
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#800101" />
    <!--Fin Meta-->

    <!--Titulo y Favicom-->
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://www.uaeh.edu.mx/favicon.ico"/>

    <!--Inico Estilos-->
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style-uaeh.css')}}" />
    <link rel="stylesheet" href="{{asset('css/menu-top-cen.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/translateelement.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}" />
  </head>
  
  <body style="position: relative; min-height: 100%; top: 0px">
    <!--Botón para buscar micrositio-->
    <div id="filter-panel" class="collapse filter-panel bot_bus">
      <form class="form-inline" action="/buscador/" method="get" accept-charset="UTF-8">
        <div class="form-group">
          <input type="text" class="form-control input-sm" id="pref-search" name="q" placeholder="Buscar micrositios o páginas"/>
        </div>
      </form>
    </div>
    <!--Span para seleccionar idioma-->
    <div id="filter-panelTrans" class="collapse filter-panel bot_bus">
      <div id="google_translate_element">
        <div class="skiptranslate goog-te-gadget" dir="ltr">
          <div id=":0.targetLanguage" style="white-space: nowrap" class="goog-te-gadget-simple">
              <span style="vertical-align: middle">
                <a aria-haspopup="true" class="goog-te-menu-value"href="javascript:void(0)">
                  <span>Seleccionar idioma</span>
                  <span style="border-left: 1px solid rgb(187, 187, 187)">​</span>
                  <span style="color: rgb(118, 118, 118)" aria-hidden="true">▼</span>
                </a>
            </span>
          </div>
        </div>
      </div>  
    </div>
    <!--Botones para cambiar estilos-->
    <div class="conten-all">
      <div class="row fondomenutoplat">
        <div class="col-xs-1 col-sm-1 visible-xs">
          <a id="btn1" class="sidebtn btn-gira sidemenu-bar"><span></span></a>
        </div>
        <div class="col-xs-8 col-sm-8 visible-xs"></div>
        <div class="col-xs-1 col-sm-1 visible-xs">
          <button type="button" class="btn icon_bus" data-toggle="collapse" data-target="#filter-panel" onclick="javascript:CambiarEstilo2();">
            <span class="fa fa-search fa-inverse fa-lg" id="btn-busqueda2"></span>
          </button>
        </div>
        <div class="col-xs-1 col-sm-1 visible-xs">
          <button type="button" class="btn icon_bus" data-toggle="collapse" data-target="#filter-panelTrans" onclick="javascript:CambiarEstilo();">
            <span class="fa fa-globe fa-inverse fa-lg" id="btn-idioma2"></span>
          </button>
        </div>
      </div>
      <!-- MENU 1 -->
      <div id="content-menu-top">
        <nav class="navbar navbar-uaeh-top" role="navigation">
          <div class="collapse navbar-collapse fondomenutop">
            <ul class="nav navbar-nav navbar-left">
              <li class="hidden-sm hidden-xs hidden-sm-plus"><a href="https://www.uaeh.edu.mx/enlaces/">Enlaces</a></li>
              <li class="hidden-sm hidden-xs hidden-sm-plus"><a href="https://www.uaeh.edu.mx/dependencias/">Dependencias A-Z</a ></li>
              <li class="hidden-sm hidden-xs hidden-sm-plus"><a href="https://www.uaeh.edu.mx/directorio/">Directorio</a></li>
              <li class="hidden-sm hidden-xs hidden-sm-plus"><a href="https://www.uaeh.edu.mx/defensor_univ/">Defensor Universitario</a></li>
              <li class="hidden-sm hidden-xs hidden-sm-plus"><a href="https://www.uaeh.edu.mx/patronato/">Patronato</a></li>
              <li class="hidden-sm hidden-xs hidden-sm-plus"><a href="http://sistemas.uaeh.edu.mx/accesoGeneral/indexGeneral.php">Plataforma Garza</a></li>
              <li class="dropdown visible-sm visible-sm-plus"><a href="#" class="dropdown-toggle" data-toggle="dropdown" >Menú <i class="fa fa-caret-down fa-lg"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="https://www.uaeh.edu.mx/enlaces/">Enlaces</a></li>
                  <li><a href="https://www.uaeh.edu.mx/dependencias/">Dependencias A-Z</a ></li>
                  <li><a href="https://www.uaeh.edu.mx/directorio/">Directorio</a></li>
                  <li><a href="https://www.uaeh.edu.mx/defensor_univ/">Defensor Universitario</a></li>
                  <li><a href="https://www.uaeh.edu.mx/patronato/">Patronato</a></li>
                  <li><a href="http://sistemas.uaeh.edu.mx/accesoGeneral/indexGeneral.php">Plataforma Garza</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right hidden-xs">
              <li><a href="http://repository.uaeh.edu.mx/">Publicaciones en línea</a></li>
              <li><a href="https://www.uaeh.edu.mx/alumnado/">Alumnado</a></li>
              <li> <a href="https://www.uaeh.edu.mx/aspirantes/">Aspirantes</a></li>
              <li><a href="https://www.uaeh.edu.mx/personal/">Personal</a></li>
              <li><a href="https://www.uaeh.edu.mx/egresados/">Alumni</a></li>
              <li><a href="https://www.uaeh.edu.mx/visitantes/">Visitantes</a></li>
              <li class="buspp">
                <button type="button" class="btn icon_bus"data-toggle="collapse" data-target="#filter-panel"onclick="javascript:CambiarEstilo2();">
                  <span class="fa fa-search fa-inverse" id="btn-busqueda"></span>
                </button>
              </li>
              <li class="buspp">
                  <button type="button" class="btn icon_bus" data-toggle="collapse" data-target="#filter-panelTrans" onclick="javascript:CambiarEstilo();">
                    <span class="fa fa-globe fa-inverse" id="btn-idioma"></span>
                  </button>
              </li>
            </ul>
          </div>
          <!--TITULO Y LOGOTIPO-->
          <div class="container">
            <div class="row row-centered">
              <div class="col-centered">
                <a href="https://www.uaeh.edu.mx/">
                  <div class="logo hidden-xs"></div>
                  <div id="encabezado_uaeh"> Universidad Autónoma del Estado de Hidalgo</div>
                </a>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <!-- FIN MENU 1 -->
      <!-- MENU 2 -->
      <div id="content-menu-central">
        <div class="navbar navbar-uaeh-centro yamm" role="navigation" id="menuhorizontal">
          <div class="container-cent">
            <div class="navbar-collapse collapse" id="primary_nav_wrap">
              <center>
                <h3>Grupo de Investigación: Computación para la Innovación de Ambientes Educativos</h3>
              </center>
            </div>
          </div>
        </div>
      </div>
      <!-- END MENU 2 -->
      <!-- Contenido de tu pagina Web -->
      <!-- Menú para el GI-->
      <div class="menu-gi">
        <header>
          <nav class="navegacion">
            <ul class="menu">
              <li><a href="{{route('home')}}">Inicio</a></li>
              <li><a href="#">Información general</a>
                <ul class="submenu">
                  <li><a href="{{route('objetivo_general.show')}}"s>Objetivo General</a></li>
                  <li><a href="{{route('lgaic.show')}}" id="lgaic">LGAIC</a></li>
                  <li><a href="{{route('investigadores.index')}}" id="Investigadores">Investigadores</a></li>
                </ul>
              </li>
              <li><a href="#">Investigación</a>
                <ul class="submenu">
                  <li><a href="{{route('proyectos-desarrollados.index')}}" id="Proyectosdesarrollados">Proyectos desarrollados</a></li>
                <li><a href="{{route('productos-cientificos.index')}}" id="Productoscientificos">Productos científicos</a></li>
                  <li><a href="{{route('estancias-academicas-y-cientificas.index')}}" id="Estanciasacademicasycientificas">Estancias académicas y científicas</a></li>
                  <li><a href="{{route('participacion-con-otras-ca.index')}}" id="Participacionconotrasca">Participación con otros CA</a>
                  </li>
                </ul>
              </li>
              <li><a href="#">Docencia</a>
                <ul class="submenu">
                <li><a href="{{route('actividad-docente.index')}}" id="Actividaddocente">Actividad docente</a></li>
                  <li><a href="{{route('actividades-de-tutelaje.index')}}" id="Actividadesdetutelaje">Actividades de tutelaje</a></li>
                <li><a href="{{route('proyectos-de-estudiantes.index')}}" id="Proyectosdeestudiantes">Proyectos de estudiantes</a></li>
                <li><a href="{{route('gestion-academica.index')}}" id="Gestionacademica">Gestión académica</a></li>
                  <li><a href="{{route('actualizacion-de-pe.index')}}" id="Actualizacionpe">Actualización PE</a></li>
                <li><a href="{{route('actualizacion-de-posgrados.index')}}" id="Actualizaciondeposgrados">Actualización de posgrados</a></li>
                </ul>
              </li>
            <li><a href="{{url('/contacto')}}" id="Contacto">Contacto</a></li>
            <li><a href="{{url('/mapa-sitio')}}" id="Mapasitio">Mapa del sitio</a></li>
            </ul>
          </nav>
        </header>
      </div>
      <!--Cabecera interna del GI-->
      <!-- Mostrar contenido-->
      <div class="contenido-pagina">
        <div class="cabecera">
          <div class="inner-wrap">
            <div class="title-wrapper">
              <h1 class="titulo-cabecera">@yield('header')</h1>
            </div>
          </div>
        </div>
      </div>
      <div>@yield('content')</div>
      <!--Inicio Logros-->
      <div id="content-footer">
        <footer class="footsies">
          <div class="container">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-3 t_min">
                <p><a href="https://www.uaeh.edu.mx/legal.html" class="link-w">Legal</a></p>
                <p><a href="https://www.uaeh.edu.mx/privacidad.html"class="link-w">Aviso de Privacidad</a></p>
                <p><a href="https://www.uaeh.edu.mx/acercade/" class="link-w">Contacto</a></p>
                <a href="http://www.editorialox.com/" target="new">
                  <img src="{{asset('img/logo_ox_2016.png')}}" alt="Premio Internacional OX 2016" class="img-responsive" />
                </a>
                <p><a href="http://www.editorialox.com/" target="new" class="link-w"><small>Web premiada con el<br/> Premio Internacional OX</small></a></p>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 text-center">
                <p><img class="center" src="{{asset('img/logo-uaeh.png')}}" /></p>
                <p>"Amor, Orden y Progreso"</p>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-3 t_min">
                <p><a href="http://sgc.uaeh.edu.mx/planeacion/index.php/inicio-contraloria" class="link-w">Contraloría Social &nbsp;&nbsp;<img src="{{asset('img/logoCS.png')}}" alt="Contraloría Social" width="20px" height="17px"/></a></p>
                <p><a href="https://www.uaeh.edu.mx/transparencia/"class="link-w">Transparencia</a></p>
                <p><a href="https://www.uaeh.edu.mx/calendario/" class="link-w">Calendario Académico</a></p>
                <p><a href="https://www.uaeh.edu.mx/accesibilidad/" class="link-w">Mapas y Accesibilidad</a>
                  &nbsp;&nbsp;&nbsp;<a class="btn_contrast" href="javascript:(function(){var css='html {-webkit-filter: invert(100%);'+'-moz-filter: invert(100%);'+'-o-filter: invert(100%);'+'-ms-filter: invert(100%); }',head=document.getElementsByTagName('head')[0],style=document.createElement('style');if(!window.counter){window.counter=1;}else{window.counter++;if(window.counter%2==0){var css='html {-webkit-filter: invert(0%); -moz-filter: invert(0%); -o-filter: invert(0%); -ms-filter: invert(0%); }'}};style.type='text/css';if(style.styleSheet){style.styleSheet.cssText=css;}else{style.appendChild(document.createTextNode(css));}head.appendChild(style);})();">
                    <i class="fa fa-adjust fa-1x"></i>
                  </a>
                </p>
                <p><a href="http://www.cumex.org.mx/" class="link-w">Consorcio de Universidades Mexicanas</a></p>
              </div>
            </div>
          </div>
          <div class="bottom-social col-lg-12 text-center">
            <span class="soc fa-stack fa-lg">
              <a href="https://www.facebook.com/OficialUAEH/" class="soc">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-facebook fa-stack-1x fa-inverse f-style"></i>
              </a>
            </span>
            <span class="soc fa-stack fa-lg">
              <a href="https://twitter.com/UAEH_OFICIAL" class="soc">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-twitter fa-stack-1x fa-inverse f-style"></i>
              </a>
            </span>
            <span class="soc fa-stack fa-lg">
              <a href="https://www.instagram.com/oficial_uaeh/" class="soc">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-instagram fa-stack-1x fa-inverse f-style"></i>
              </a>
            </span>
            <span class="soc fa-stack fa-lg">
              <a href="https://www.uaeh.edu.mx/itunesu/" class="soc">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-apple fa-stack-1x fa-inverse f-style"></i>
              </a>
            </span>
            <span class="soc fa-stack fa-lg">
              <a href="https://www.youtube.com/channel/UCCFewkZaOp1p4nPLHQnpKCw" class="soc">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-youtube fa-stack-1x fa-inverse f-style"></i>
              </a>
            </span>
            <span class="soc fa-stack fa-lg">
              <a href="https://es.linkedin.com/edu/universidad-aut%C3%B3noma-del-estado-de-hidalgo-15080"class="soc">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-linkedin fa-stack-1x fa-inverse f-style"></i>
              </a>
            </span>
            <span class="soc fa-stack fa-lg">
              <a href="https://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&amp;field-keywords=universidad+autonoma+del+estado+de+hidalgo&amp;rh=i%3Aaps%2Ck%3Auniversidad+autonoma+del+estado+de+hidalgo" class="soc">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-amazon fa-stack-1x fa-inverse f-style"></i>
              </a>
            </span>
            <span class="soc fa-stack fa-lg">
              <a href="https://www.uaeh.edu.mx/radio/" class="soc">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-microphone fa-stack-1x fa-inverse f-style"></i>
              </a>
            </span>
            <span class="soc fa-stack fa-lg">
              <a href="https://mail.google.com/uaeh.edu.mx/" class="soc">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-envelope-o fa-stack-1x fa-inverse f-style"></i>
              </a>
            </span>
          </div>
        </footer>
      </div>
      <!-- FIN Logros -->
    </div>
    <!--Fin contenido-->
    <!--Sugerencia de traducción-->
    <div id="goog-gt-tt" class="skiptranslate" dir="ltr">
      <div style="padding: 8px">
        <div>
          <div class="logo">
            <img src="{{asset('img/translate_24dp.png')}}" alt="Google Traductor de Google" width="20" height="20"/>
          </div>
        </div>
      </div>
      <div class="top" style="padding: 8px; float: left; width: 100%">
        <h1 class="title gray">Texto original</h1>
      </div>
      <div class="middle" style="padding: 8px">
        <div class="original-text"></div>
      </div>
      <div class="bottom" style="padding: 8px">
        <div class="activity-links">
          <span class="activity-link">Sugiere una traducción mejor</span
          ><span class="activity-link"></span>
        </div>
        <div class="started-activity-container">
          <hr
            style="
              color: #ccc;
              background-color: #ccc;
              height: 1px;
              border: none;
            "
          />
          <div class="activity-root"></div>
        </div>
      </div>
      <div class="status-message" style="display: none"></div>
    </div>
    <!--Fin sugerencia de traducción-->
    <div class="goog-te-spinner-pos">
      <div class="goog-te-spinner-animation">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="goog-te-spinner"
          width="96px"
          height="96px"
          viewBox="0 0 66 66"
        >
          <circle
            class="goog-te-spinner-path"
            fill="none"
            stroke-width="6"
            stroke-linecap="round"
            cx="33"
            cy="33"
            r="30"
          ></circle>
        </svg>
      </div>
    </div>
    <iframe
        class="goog-te-menu-frame skiptranslate"
        title="Widget de idiomas del Traductor"
        style="
          visibility: visible;
          box-sizing: content-box;
          width: 233px;
          height: 274px;
          display: none;
        "
        frameborder="0"
      >
    </iframe>
    <!--Scripts necesarios-->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/fa-feeds-plus-not.js')}}"></script>
    <script src="{{asset('js/funciones.js')}}"></script>
    <script src="{{asset('js/main_es.js')}}"></script>
    <script src="{{asset('js/element_main.js')}}"></script>
    <script src="{{asset('js/element.js')}}"></script>
    <script src="{{asset('js/componentes.js')}}"></script>
    <script src="{{asset('js/webServices.js')}}"></script>
    <script src="{{asset('js/atrk.js')}}"></script>
    <script src="{{asset('js/analytics.js')}}"></script>
      
    <script>
      document.oncontextmenu = function () {
        return false;
      };
    </script>
  
    <script>
      $(document).keydown(function (event) {
        if (event.keyCode == 123) {
          return false;
        } else if (
          (event.ctrlKey && event.shiftKey && event.keyCode == 73) ||
          (event.ctrlKey && event.shiftKey && event.keyCode == 74) ||
          (event.ctrlKey && event.keyCode == 85) ||
          event.ctrlKey ||
          event.shiftKey
        ) {
          return false;
        }
      });
    </script>
    <!--FB RS Force -->
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "Universidad Autónoma del Estado de Hidalgo",
        "url": "https://www.uaeh.edu.mx/",
        "sameAs": [
          "https://www.facebook.com/OficialUAEH/",
          "https://twitter.com/UAEH_OFICIAL"
        ]
      }
    </script>
    <script>
      (function (i, s, o, g, r, a, m) {
      i["GoogleAnalyticsObject"] = r;
      (i[r] =
      i[r] ||
      function () {
          (i[r].q = i[r].q || []).push(arguments);
      }),
      (i[r].l = 1 * new Date());
      (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m);
      })(
      window,
      document,
      "script",
      "//www.google-analytics.com/analytics.js",
      "ga"
      );
      ga("create", "UA-33872262-1", "auto");
      ga("send", "pageview");
    </script>
    <script>
      _atrk_opts = {
        atrk_acct: "xP59k1a0CM00Or",
        domain: "uaeh.edu.mx",
        dynamic: true,
      };
      (function () {
        var as = document.createElement("script");
        as.type = "text/javascript";
        as.async = true;
        as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(as, s);
      })();
    </script>  
    <script>
      function googleTranslateElementInit() {
        new google.translate.TranslateElement(
          {
            pageLanguage: "es",
            includedLanguages:"ar,de,el,en,es,fr,hi,it,ja,la,pt,ru,sv,tr,uk,zh-CN,zh-TW",
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            gaTrack: true,
            gaId: "UA-33872262-1",
          },
          "google_translate_element"
         );
      }
    </script>
  </body>
  </html>
  