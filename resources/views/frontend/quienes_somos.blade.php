@extends('layouts.public')

@section('title')
¿QUIÉNES SOMOS?
@endsection

@section('content')  
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('{{asset('/plantilla_advent/img/slider-2.jpg')}}');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Quiénes Somos</h1>
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FIN del slider -->

    <section class="section pt-md-5 pb-md-5 element-animate">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-12">
            <span class="section-heading">Historia</span>
            <h2>Pequeño Comienzo</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta doloremque ipsam, error quas ex eum! Possimus culpa praesentium numquam mayores nam ab autem rerum consectetur! Illum expedita provident omnis sint deleniti, molestiae perspiciatis delectus est autem natus dolore mayores ipsum quibusdam placeat ratione. Expedita repudiandae dicta accusamus quibusdam, similique blanditiis!</p>
            <p>Repellat doloremque illo voluptates repellendus? Sit sequi iste doloremque consequatur magnam, odit architecto optio corrupti facere, perspiciatis sed ratione modi at repudiandae, adipisci accusamus in suscipit accusantium eum soluta. Nemo labore consequatur tenetur similique corporis perspiciatis repudiandae officia, nam fugit distinctio, aliquam quo iste sed? Nemo ad pariatur a corporis.</p>
            <h2 class="mb-4">"Y todo lo que hagáis, hacedlo de corazón, como para el Señor y no para los hombres." &mdash; Colosenses: 3:23</h2>
            <p>Exercitationem in, earum dolore necessitatibus aperiam sequi odit aspernatur dolorum ad magnam quidem totam laboriosam quae, perspiciatis, odio eum. Rem, fuga laboriosam commodi odio debitis in perferendis ipsam illum, reprehenderit, mollitia odit illo omnis blanditiis unde vero numquam cumque excepturi hic exercitationem qui porro a minus modi aliquid! Vero, non.</p>
          </div>
          <div class="col-md-6">
            <p><img src="{{asset('/plantilla_advent/img/founder.jpg')}}" alt="Imagen del Fundador" class="img-fluid"></p>
          </div>
        </div>
      </div>
    </section>
    <!-- FIN de la sección -->

    <section class="section">
      <div class="container">
        <div class="row mb-5 justify-content-center element-animate">
          <div class="col-md-12">
            <span class="section-heading">Pastores</span>
            <h2>Conoce a Nuestros Pastores</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 element-animate">
            <div class="media pastor d-block text-center">
              <img src="{{asset('/plantilla_advent/img/pastor_1.jpg')}}" alt="Imagen del Pastor Luis Matthew" class="img-fluid mb-4">
              <div class="media-body">
                <h3>Luis Matthew</h3>
                <p class="position">Pastor de la Iglesia</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat vel nam natus dolore fugit, dolores explicabo nemo in, laboriosam incidunt, repudiandae! Aut, accusantium nihil facilis ducimus quas autem fugit odio?</p>
                <p><a href="#" class="btn btn-primary">Leer Biografía</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 element-animate">
            <div class="media pastor d-block text-center">
              <img src="{{asset('/plantilla_advent/img/pastor_2.jpg')}}" alt="Imagen del Pastor Chris Mattwood" class="img-fluid mb-4">
              <div class="media-body">
                <h3>Chris Mattwood</h3>
                <p class="position">Pastor de la Iglesia</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat vel nam natus dolore fugit, dolores explicabo nemo in, laboriosam incidunt, repudiandae! Aut, accusantium nihil facilis ducimus quas autem fugit odio?</p>
                <p><a href="#" class="btn btn-primary">Leer Biografía</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 element-animate">
            <div class="media pastor d-block text-center">
              <img src="{{asset('/plantilla_advent/img/pastor_3.jpg')}}" alt="Imagen del Pastor Jack Winston" class="img-fluid mb-4">
              <div class="media-body">
                <h3>Jack Winston</h3>
                <p class="position">Pastor de la Iglesia</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat vel nam natus dolore fugit, dolores explicabo nemo in, laboriosam incidunt, repudiandae! Aut, accusantium nihil facilis ducimus quas autem fugit odio?</p>
                <p><a href="#" class="btn btn-primary">Leer Biografía</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section pt-5 pb-2">
      <div class="container">
        <div class="row mb-5 justify-content-center element-animate">
          <div class="col-md-12">
            <span class="section-heading">Sermones Recientes</span>
            <h2>Escucha Nuestros Sermones</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-4 mb-5">
            <div class="sermon element-animate">
              <div class="sermon-text">
                <h2><a href="#">Levántate, Resplandece</a></h2>
                <p class="sermon-meta">por <a href="#">Luis Matthew</a> el 28 de marzo de 2018</p>
              </div>
              <div class="player">
                <audio id="player2" preload="none" controls style="max-width: 100%">
                    <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
                </audio>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-4 mb-5">
            <div class="sermon element-animate">
              <div class="sermon-text">
                <h2><a href="#">Llenos en Él</a></h2>
                <p class="sermon-meta">por <a href="#">Luis Matthew</a> el 28 de marzo de 2018</p>
              </div>
              <div class="player">
                <audio id="player3" preload="none" controls style="max-width: 100%">
                    <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
                </audio>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-4 mb-5">
            <div class="sermon element-animate">
              <div class="sermon-text">
                <h2><a href="#">Jehová el Creador</a></h2>
                <p class="sermon-meta">por <a href="#">Luis Matthew</a> el 28 de marzo de 2018</p>
              </div>
              <div class="player">
                <audio id="player4" preload="none" controls style="max-width: 100%">
                    <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
                </audio>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section pt-5 pb-2">
      @php
      $videos = [
          "1178244803434168",
          "1027891118828594",
          "876176354430579",
          "1160874775208334",
          "940220314326188",
          "1032406431827717",
          "2448980065302065"
      ];
      @endphp
  
      <div class="slider">
          <div class="slide-track" id="slideTrack">
              @foreach ($videos as $video)
              <div class="slide">
                  <iframe class="video-iframe" src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FWESLEYANAFLANDES%2Fvideos%2F{{$video}}%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
              </div>
              @endforeach
          </div>
      </div>
  </section>
@endsection
@section('js')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const iframes = document.querySelectorAll('.video-iframe');
    const slideTrack = document.getElementById('slideTrack');

    iframes.forEach(iframe => {
          iframe.addEventListener('mouseenter', function() {
              // Pausar la animación cuando el cursor entra en el iframe
              slideTrack.classList.add('paused');
          });

          iframe.addEventListener('mouseleave', function() {
              // Reanudar la animación cuando el cursor sale del iframe
              slideTrack.classList.remove('paused');
          });

          // Detectar si el video comienza a reproducirse (Facebook iframes)
          iframe.contentWindow.addEventListener('play', function() {
              slideTrack.classList.add('paused');
          });

          // Detectar si el video se pausa o termina
          iframe.contentWindow.addEventListener('pause', function() {
              slideTrack.classList.remove('paused');
          });

          iframe.contentWindow.addEventListener('ended', function() {
              slideTrack.classList.remove('paused');
          });
    });
});

</script>
@endsection
@section('css')
    <style>
      .slider {
          width: 100%;
          overflow: hidden;
          position: relative;
      }

      .slide-track {
          display: flex;
          width: calc(560px * 7); /* Ancho de un iframe por la cantidad de videos */
          animation: scroll 20s linear infinite;
      }

      .slide {
          flex: none;
          width: 560px; /* Ancho del iframe */
          margin-right: 15px; /* Espacio entre los iframes */
      }

      @keyframes scroll {
          0% {
              -webkit-transform: translateX(0);
              transform: translateX(0);
          }
          100% {
              -webkit-transform: translateX(calc(-200px * 7));
              transform: translateX(calc(-200px * 7));
          }
      }
      .paused {
          animation-play-state: paused;
      }
    </style>
@endsection
