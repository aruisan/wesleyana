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
              <li class="nav-item">
                <a class="nav-link active" href="{{route('public.inicio')}}">Inicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('public.quienes_somos')}}">¿Quienes somos?</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{route('public.ministerios')}}" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mnisterios
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="{{route('public.ministerios')}}">Evangelismo</a>
                  <a class="dropdown-item" href="{{route('public.ministerios')}}">Diaconado</a>
                  <a class="dropdown-item" href="{{route('public.ministerios')}}">Escuela Infantil</a>
                  <a class="dropdown-item" href="{{route('public.ministerios')}}">Multimedia</a>
                  <a class="dropdown-item" href="{{route('public.ministerios')}}">Alabanza</a>
                  <a class="dropdown-item" href="{{route('public.ministerios')}}">Intercesión</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('public.eventos')}}">Eventos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('public.contacto')}}">Contacto</a>
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
            <h3>About The Advent</h3>
            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et dolor blanditiis consequuntur ex voluptates perspiciatis omnis unde minima expedita.</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>
          <div class="col-md-3 mb-5">
            <h3>Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="#">Sermons</a></li>
              <li><a href="#">Ministries</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-5 mb-5">
            <h3>Contact Info</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block">
                <span class="d-block">Address:</span>
                <span class="text-white">34 Street Name, City Name Here, United States</span></li>
              <li class="d-block"><span class="d-block">Telephone:</span><span class="text-white">+1 242 4942 290</span></li>
              <li class="d-block"><span class="d-block">Email:</span><span class="text-white">info@yourdomain.com</span></li>
            </ul>
          </div>
          
        </div>
        <div class="row">
          <div class="col-12 text-md-center text-left">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> <br> Demo Images Unsplash</p>
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

    @yield('css')
  </body>
</html>