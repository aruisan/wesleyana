@extends('layouts.public')

@section('title')
INICIO
@endsection

@section('content')    
    <section class="home-slider owl-carousel">
      
      <div class="slider-item" style="background-image: url('{{asset('/plantilla_advent/img/slider-1.jpg')}}');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Levántate, Brilla</h1>
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
              <p><a href="#" class="btn btn-white btn-outline-white">Ver Ahora</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('{{asset('/plantilla_advent/img/slider-2.jpg')}}');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Explora Nuestros Servicios de Fin de Semana</h1>
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
              <p><a href="#" class="btn btn-white btn-outline-white">Explorar Ahora</a></p>
            </div>
          </div>
        </div>
        
      </div>

    </section>
    <!-- FIN del slider -->

    <section class="upcoming-events-highlight">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-3 element-animate">
            <span class="section-heading">Próximos Eventos</span>
            <h2><a href="#">Debemos caminar en el medio del camino.</a></h2>
            <div class="events-meta">
              <span class="mr-2"><span class="ion-clock mr-2"></span>Sábado 03/09/2018 09:30 AM</span>
              <span class="mr-2"><span class="ion-location mr-2"></span>San Petersburgo, EE.UU.</span>
              <span class="mr-2"><span class="ion-person mr-2"></span>Pastor Luis Matthew</span>
            </div>
          </div>
          <div class="col-md-6 element-animate">
            <div id="date-countdown"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- FIN de la sección -->
    
    <section class="element-animate worship-time">
      
      <div class="half d-md-flex d-block">
        <div class="image order-2" style="background-image: url('{{asset('/plantilla_advent/img/img_2.jpg')}}')"></div>
        <div class="text element-animate">
          <h3 class="mb-4 mt-5">Horario de Culto</h3>
          
          <ul class="worship-time-list mb-5">
            <li>
              <a href="#">Domingo Primer Servicio
              <span>7:00AM - 8:30AM</span>
              </a>
            </li>
            <li>
              <a href="#">Domingo Segundo Servicio
              <span>9:30AM - 11:00AM</span>
              </a>
            </li>
            <li>
              <a href="#">Miercoles Ayuno
              <span>8:00AM - 12:00AM</span>
              </a>
            </li>
            <li>
              <a href="#">Miercoles En la noche
              <span>7:00PM - 8:30PM</span>
              </a>
            </li>
          </ul>
        </div>
      </div>

    </section>
    <!-- FIN de la sección -->

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
            <h2><a href="#">Levántate, Brilla</a></h2>
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
            <h2><a href="#">Lleno en Él</a></h2>
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

    <!-- FIN de la sección -->
    
    <section class="section">
      <div class="container">
        <div class="row mb-5 justify-content-center element-animate">
          <div class="col-md-12">
            <span class="section-heading">Ministerios</span>
            <h2>Eventos &amp; Ministerios</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 element-animate">
            <div class="media custom-media">
              <img class="mr-3" width="30" src="{{asset('/plantilla_advent/img/img_1.jpg')}}" alt="Imagen genérica">
              <div class="media-body">
                <h3 class="mt-0"><a href="#">Oración &amp; Devocional para Niños</a></h3>
                <p class="post-meta">12 de mayo de 2018, <a href="#">Ministerios para Niños</a></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed obcaecati, totam recusandae iure non nemo.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 element-animate">
            <div class="media custom-media">
              <img class="mr-3" width="30" src="{{asset('/plantilla_advent/img/img_2.jpg')}}" alt="Imagen genérica">
              <div class="media-body">
                <h3 class="mt-0"><a href="#">Debemos Caminar en el Medio del Camino</a></h3>
                <p class="post-meta">12 de mayo de 2018, <a href="#">Misiones</a></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed obcaecati, totam recusandae iure non nemo.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 element-animate">
            <div class="media custom-media">
              <img class="mr-3" width="30" src="{{asset('/plantilla_advent/img/img_3.jpg')}}" alt="Imagen genérica">
              <div class="media-body">
                <h3 class="mt-0"><a href="#">Distribución de Folletos</a></h3>
                <p class="post-meta">12 de mayo de 2018, <a href="#">Ministerio de Cuidado</a></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed obcaecati, totam recusandae iure non nemo.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  @endsection
