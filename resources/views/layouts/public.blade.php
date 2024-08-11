<!doctype html>
<html lang="en">
  <head>
    <title>
        @yield('title')
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Playfair+Display:,300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/plantilla_advent/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/plantilla_advent/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/plantilla_advent/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">

    <link rel="stylesheet" href="{{asset('/plantilla_advent/fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/plantilla_advent/fonts/fontawesome/css/font-awesome.min.css')}}">


    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('/plantilla_advent/css/style.css')}}">

    @yield('css')
  </head>
  <body>
    
    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="{{route('public.inicio')}}">Wesleyana</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                <li class="nav-item {{ Route::currentRouteName() == 'public.inicio' ? 'active' : '' }}">
                    <a class="nav-link {{ Route::currentRouteName() == 'public.inicio' ? 'active' : '' }}" href="{{ route('public.inicio') }}">Inicio</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'public.quienes_somos' ? 'active' : '' }}">
                    <a class="nav-link {{ Route::currentRouteName() == 'public.quienes_somos' ? 'active' : '' }}" href="{{ route('public.quienes_somos') }}">¿Quiénes somos?</a>
                </li>
                <li class="nav-item dropdown {{ Route::currentRouteName() == 'public.ministerios' ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle {{ Route::currentRouteName() == 'public.ministerios' ? 'active' : '' }}" href="{{ route('public.ministerios') }}" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ministerios
                    </a>
                    <div class="dropdown-menu {{ Route::currentRouteName() == 'public.ministerios' ? 'show' : '' }}" aria-labelledby="dropdown04">
                        <a class="dropdown-item {{ Route::currentRouteName() == 'public.ministerios.evangelismo' ? 'active' : '' }}" href="{{ route('public.ministerios', ['type' => 'evangelismo']) }}">Evangelismo</a>
                        <a class="dropdown-item {{ Route::currentRouteName() == 'public.ministerios.diaconado' ? 'active' : '' }}" href="{{ route('public.ministerios', ['type' => 'diaconado']) }}">Diaconado</a>
                        <a class="dropdown-item {{ Route::currentRouteName() == 'public.ministerios.escuela_infantil' ? 'active' : '' }}" href="{{ route('public.ministerios', ['type' => 'escuela_infantil']) }}">Escuela Infantil</a>
                        <a class="dropdown-item {{ Route::currentRouteName() == 'public.ministerios.multimedia' ? 'active' : '' }}" href="{{ route('public.ministerios', ['type' => 'multimedia']) }}">Multimedia</a>
                        <a class="dropdown-item {{ Route::currentRouteName() == 'public.ministerios.alabanza' ? 'active' : '' }}" href="{{ route('public.ministerios', ['type' => 'alabanza']) }}">Alabanza</a>
                        <a class="dropdown-item {{ Route::currentRouteName() == 'public.ministerios.intercesion' ? 'active' : '' }}" href="{{ route('public.ministerios', ['type' => 'intercesion']) }}">Intercesión</a>
                    </div>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'public.eventos' ? 'active' : '' }}">
                    <a class="nav-link {{ Route::currentRouteName() == 'public.eventos' ? 'active' : '' }}" href="{{ route('public.eventos') }}">Eventos</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'public.contacto' ? 'active' : '' }}">
                    <a class="nav-link {{ Route::currentRouteName() == 'public.contacto' ? 'active' : '' }}" href="{{ route('public.contacto') }}">Contacto</a>
                </li>
            </ul>
          </div>
        
        </div>
      </nav>
    </header>
    <!-- END header -->

    @yield('content')
    
    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3>Acerca de The Advent</h3>
            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et dolor blanditiis consequuntur ex voluptates perspiciatis omnis unde minima expedita.</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Enlaces Rápidos</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="#">Sermones</a></li>
              <li><a href="#">Ministerios</a></li>
              <li><a href="#">Eventos</a></li>
              <li><a href="#">Contacto</a></li>
            </ul>
          </div>
          <div class="col-md-5 mb-5">
            <h3>Información de Contacto</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block">
                <span class="d-block">Dirección:</span>
                <span class="text-white">34 Nombre de Calle, Nombre de Ciudad Aquí, Estados Unidos</span>
              </li>
              <li class="d-block">
                <span class="d-block">Teléfono:</span>
                <span class="text-white">+1 242 4942 290</span>
              </li>
              <li class="d-block">
                <span class="d-block">Correo Electrónico:</span>
                <span class="text-white">info@tudominio.com</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-md-center text-left">
            <p>
              <!-- El enlace a Colorlib no se puede eliminar. La plantilla está licenciada bajo CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Esta plantilla está hecha con <i class="fa fa-heart-o" aria-hidden="true"></i> por <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- El enlace a Colorlib no se puede eliminar. La plantilla está licenciada bajo CC BY 3.0. -->
              <br> Imágenes de demostración Unsplash
            </p>
          </div>
        </div>
      </div>
    </footer>
    
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="{{asset('/plantilla_advent/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('/plantilla_advent/js/popper.min.js')}}"></script>
    <script src="{{asset('/plantilla_advent/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/plantilla_advent/js/owl.carousel.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelement-and-player.min.js"></script>
    <script src="{{asset('/plantilla_advent/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('/plantilla_advent/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('/plantilla_advent/js/main.js')}}"></script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>

    @yield('js')
  </body>
</html>