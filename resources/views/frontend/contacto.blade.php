@extends('layouts.public')

@section('title')
CONTACTO
@endsection

@section('content')     
    <section class="home-slider owl-carousel">
      
      <div class="slider-item" style="background-image: url('{{asset('/plantilla_advent/img/img_3.jpg')}}');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Contáctanos</h1>
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
            <span class="section-heading">Contacto</span>
            <h2>Contáctanos</h2>
          </div>
        </div>

        <div class="row m-4">
          <div class="mapouter">
            <div class="gmap_canvas">
              <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=866&amp;height=623&amp;hl=es&amp;q=wesleyana%20flandes&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
              <a href="https://connectionsgame.org/">Connections Puzzle</a>
            </div>
            <style>
              .mapouter { position: relative; text-align: right; width: 100%; height: 623px; }
              .gmap_canvas { overflow: hidden; background: none!important; width: 100%; height: 623px; }
              .gmap_iframe { height: 623px!important; }
            </style>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <form action="#" method="post">
            
              <div class="row mb-4">
                <div class="col-md-4 mb-md-0 mb-4">
                  <input type="text" class="form-control" placeholder="Nombre Completo">
                </div>
                <div class="col-md-4 mb-md-0 mb-4">
                  <input type="text" class="form-control" placeholder="Correo Electrónico">
                </div>
                <div class="col-md-4 mb-md-0 mb-4">
                  <input type="text" class="form-control" placeholder="Teléfono">
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-md-12">
                  <textarea name="#" id="" class="form-control" placeholder="Escribe unas palabras de aliento" cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <input type="submit" class="btn btn-primary btn-block" value="Enviar Mensaje">
                </div>
              </div>
            
            </form>
          </div>
        </div>
        
      </div>
    </section>
@endsection
