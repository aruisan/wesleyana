@extends('layouts.public')

@section('title')
MINISTERIOS
@endsection

@section('content')       
    <section class="home-slider owl-carousel">
      
      <div class="slider-item" style="background-image: url('{{asset('/plantilla_advent/img/img_2.jpg')}}');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Eventos</h1>
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            </div>
          </div>
        </div>
      </div>


    </section>
    <!-- FIN slider -->

    <section class="section">
      <div class="container">
        <div class="row mb-5 justify-content-center element-animate">
          <div class="col-md-12">
            <span class="section-heading">Ministerios</span>
            <h2>Eventos y Ministerios</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 element-animate">
            <div class="media custom-media">
              <img class="mr-3" width="30" src="{{asset('/plantilla_advent/img/img_1.jpg')}}" alt="Imagen genérica">
              <div class="media-body">
                <h3 class="mt-0"><a href="#">Oración y Devocionales para Niños</a></h3>
                <p class="post-meta">12 de mayo de 2018, <a href="#">Ministerios Infantiles</a></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed obcaecati, totam recusandae iure non nemo.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 element-animate">
            <div class="media custom-media">
              <img class="mr-3" width="30" src="{{asset('/plantilla_advent/img/img_2.jpg')}}" alt="Imagen genérica">
              <div class="media-body">
                <h3 class="mt-0"><a href="#">Debemos Caminar en el Centro del Camino</a></h3>
                <p class="post-meta">12 de mayo de 2018, <a href="#">Misiones</a></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed obcaecati, totam recusandae iure non nemo.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 element-animate">
            <div class="media custom-media">
              <img class="mr-3" width="30" src="{{asset('/plantilla_advent/img/img_3.jpg')}}" alt="Imagen genérica">
              <div class="media-body">
                <h3 class="mt-0"><a href="#">Distribución de Tractos</a></h3>
                <p class="post-meta">12 de mayo de 2018, <a href="#">Ministerio de Cuidado</a></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed obcaecati, totam recusandae iure non nemo.</p>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 element-animate">
            <div class="media custom-media">
              <img class="mr-3" width="30" src="{{asset('/plantilla_advent/img/img_1.jpg')}}" alt="Imagen genérica">
              <div class="media-body">
                <h3 class="mt-0"><a href="#">Oración y Devocionales para Niños</a></h3>
                <p class="post-meta">12 de mayo de 2018, <a href="#">Ministerios Infantiles</a></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed obcaecati, totam recusandae iure non nemo.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 element-animate">
            <div class="media custom-media">
              <img class="mr-3" width="30" src="{{asset('/plantilla_advent/img/img_2.jpg')}}" alt="Imagen genérica">
              <div class="media-body">
                <h3 class="mt-0"><a href="#">Debemos Caminar en el Centro del Camino</a></h3>
                <p class="post-meta">12 de mayo de 2018, <a href="#">Misiones</a></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed obcaecati, totam recusandae iure non nemo.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 element-animate">
            <div class="media custom-media">
              <img class="mr-3" width="30" src="{{asset('/plantilla_advent/img/img_3.jpg')}}" alt="Imagen genérica">
              <div class="media-body">
                <h3 class="mt-0"><a href="#">Distribución de Tractos</a></h3>
                <p class="post-meta">12 de mayo de 2018, <a href="#">Ministerio de Cuidado</a></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed obcaecati, totam recusandae iure non nemo.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row mb-5 justify-content-center element-animate">
          <div class="col-md-12">
            <span class="section-heading">Oficiales</span>
            <h2>Oficiales para Ministerios Infantiles</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 element-animate">
            <div class="media pastor d-block text-center">
              <img src="{{asset('plantilla_advent/img/pastor_1.jpg')}}" alt="Imagen del placeholder" class="img-fluid mb-4">
              <div class="media-body">
                <h3>Luis Matthew</h3>
                <p class="position">Jefe del Ministerio Infantil</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat vel nam natus dolore fugit, dolores explicabo nemo in, laboriosam incidunt, repudiandae! Aut, accusantium nihil facilis ducimus quas autem fugit odio?</p>
                <p><a href="#" class="btn btn-primary">Leer Biografía</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 element-animate">
            <div class="media pastor d-block text-center">
              <img src="{{asset('plantilla_advent/img/pastor_2.jpg')}}" alt="Imagen del placeholder" class="img-fluid mb-4">
              <div class="media-body">
                <h3>Chris Mattwood</h3>
                <p class="position">Entrenador de Niños</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat vel nam natus dolore fugit, dolores explicabo nemo in, laboriosam incidunt, repudiandae! Aut, accusantium nihil facilis ducimus quas autem fugit odio?</p>
                <p><a href="#" class="btn btn-primary">Leer Biografía</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 element-animate">
            <div class="media pastor d-block text-center">
              <img src="{{asset('plantilla_advent/img/pastor_3.jpg')}}" alt="Imagen del placeholder" class="img-fluid mb-4">
              <div class="media-body">
                <h3>Jack Winston</h3>
                <p class="position">Oficial de Dedicación Infantil</p>
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
            <h2>Nuestros Últimos Sermones</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-4 mb-5">
            
            <div class="sermon element-animate">
              <div class="sermon-text
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
@endsection

