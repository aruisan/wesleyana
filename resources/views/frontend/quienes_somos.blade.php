@extends('layouts.public')

@section('title')
¿QUIENES SOMOS?
@endsection

@section('content')  
    <section class="home-slider owl-carousel">
      
      <div class="slider-item" style="background-image: url('{{asset('/plantilla_advent/img/slider-2.jpg')}}');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Who We Are</h1>
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            </div>
          </div>
        </div>
      </div>


    </section>
    <!-- END slider -->

    <section class="section pt-md-5 pb-md-5 element-animate">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-12">
            <span class="section-heading">History</span>
            <h2>Small Beginning</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta doloremque ipsam, error quas ex eum! Possimus culpa praesentium numquam maiores nam ab autem rerum consectetur! Illum expedita provident omnis sint deleniti, molestiae perspiciatis delectus est autem natus dolore maiores ipsum quibusdam placeat ratione. Expedita repudiandae dicta accusamus quibusdam, similique blanditiis!</p>
            <p>Repellat doloremque illo voluptates repellendus? Sit sequi iste doloremque consequatur magnam, odit architecto optio corrupti facere, perspiciatis sed ratione modi at repudiandae, adipisci accusamus in suscipit accusantium eum soluta. Nemo labore consequatur tenetur similique corporis perspiciatis repudiandae officia, nam fugit distinctio, aliquam quo iste sed? Nemo ad pariatur a corporis.</p>
            <h2 class="mb-4">"Whatsover ye do, do it heartily, as to the Lord, and not unto men." &mdash; Colossians: 3:23</h2>
            <p>Exercitationem in, earum dolore necessitatibus aperiam sequi odit aspernatur dolorum ad magnam quidem totam laboriosam quae, perspiciatis, odio eum. Rem, fuga laboriosam commodi odio debitis in perferendis ipsam illum, reprehenderit, mollitia odit illo omnis blanditiis unde vero numquam cumque excepturi hic exercitationem qui porro a minus modi aliquid! Vero, non.</p>
          </div>
          <div class="col-md-6">
            <p><img src="{{asset('/plantilla_advent/img/founder.jpg')}}" alt="Image placeholder" class="img-fluid"></p>
            
          </div>
        </div>
        <div class="row">
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="section">
      <div class="container">
        <div class="row mb-5 justify-content-center element-animate">
          <div class="col-md-12">
            <span class="section-heading">Pastors</span>
            <h2>Meet Our Pastors</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 element-animate">
            <div class="media pastor d-block text-center">
              <img src="{{asset('/plantilla_advent/img/pastor_1.jpg')}}" alt="Image placeholder" class="img-fluid mb-4">
              <div class="media-body">
                <h3>Luis Matthew</h3>
                <p class="position">Church Pastor</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat vel nam natus dolore fugit, dolores explicabo nemo in, laboriosam incidunt, repudiandae! Aut, accusantium nihil facilis ducimus quas autem fugit odio?</p>
                <p><a href="#" class="btn btn-primary">Read Bio</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 element-animate">
            <div class="media pastor d-block text-center">
              <img src="{{asset('/plantilla_advent/img/pastor_2.jpg')}}" alt="Image placeholder" class="img-fluid mb-4">
              <div class="media-body">
                <h3>Chris Mattwood</h3>
                <p class="position">Church Pastor</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat vel nam natus dolore fugit, dolores explicabo nemo in, laboriosam incidunt, repudiandae! Aut, accusantium nihil facilis ducimus quas autem fugit odio?</p>
                <p><a href="#" class="btn btn-primary">Read Bio</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 element-animate">
            <div class="media pastor d-block text-center">
              <img src="{{asset('/plantilla_advent/img/pastor_3.jpg')}}" alt="Image placeholder" class="img-fluid mb-4">
              <div class="media-body">
                <h3>Jack Winston</h3>
                <p class="position">Church Pastor</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat vel nam natus dolore fugit, dolores explicabo nemo in, laboriosam incidunt, repudiandae! Aut, accusantium nihil facilis ducimus quas autem fugit odio?</p>
                <p><a href="#" class="btn btn-primary">Read Bio</a></p>
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
            <span class="section-heading">Recent Sermons</span>
            <h2>Listen Our Sermons</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-4 mb-5">
            
            <div class="sermon element-animate">
              <div class="sermon-text">
            <h2><a href="#">Arise, Shine</a></h2>
            <p class="sermon-meta">by <a href="#">Luis Matthew</a> on March 28, 2018</p>
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
            <h2><a href="#">Filled in Him</a></h2>
            <p class="sermon-meta">by <a href="#">Luis Matthew</a> on March 28, 2018</p>
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
            <h2><a href="#">Jehovah the Creator</a></h2>
            <p class="sermon-meta">by <a href="#">Luis Matthew</a> on March 28, 2018</p>
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