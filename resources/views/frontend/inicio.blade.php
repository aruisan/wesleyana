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
              <h1>Arise, Shine</h1>
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
              <p><a href="#" class="btn btn-white btn-outline-white">Watch Now</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('{{asset('/plantilla_advent/img/slider-2.jpg')}}');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Explore Our Weekend Services</h1>
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
              <p><a href="#" class="btn btn-white btn-outline-white">Explore Now</a></p>
            </div>
          </div>
        </div>
        
      </div>

    </section>
    <!-- END slider -->

    <section class="upcoming-events-highlight">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-3 element-animate">
            <span class="section-heading">Upcoming Events</span>
            <h2><a href="#">We must walk in the middle of the road.</a></h2>
            <div class="events-meta">
              <span class="mr-2"><span class="ion-clock mr-2"></span>Saturday 03/09/2018 09:30 AM</span>
              <span class="mr-2"><span class="ion-location mr-2"></span>St. Petersburg, US</span>
              <span class="mr-2"><span class="ion-person mr-2"></span>Pastor Luis Matthew</span>
            </div>
          </div>
          <div class="col-md-6 element-animate">
            <div id="date-countdown"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="element-animate worship-time">
      
      <div class="half d-md-flex d-block">
        <div class="image order-2" style="background-image: url('{{asset('/plantilla_advent/img/img_2.jpg')}}')"></div>
        <div class="text element-animate">
          <h3 class="mb-4 mt-5">Worship Time</h3>
          
          <ul class="worship-time-list mb-5">
            <li>
              <a href="#">Morning Worship
              <span>5:30AM - 6:00AM</span>
              </a>
            </li>
            <li>
              <a href="#">Afternoon Worship
              <span>1:30PM - 2:00PM</span>
              </a>
            </li>
            <li>
              <a href="#">Evening Worship
              <span>7:30PM - 8:00PM</span>
              </a>
            </li>
          </ul>
        </div>
      </div>

    </section>
    <!-- END section -->

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

    <!-- END section -->
    
    <section class="section">
      <div class="container">
        <div class="row mb-5 justify-content-center element-animate">
          <div class="col-md-12">
            <span class="section-heading">Ministries</span>
            <h2>Events &amp; Ministries</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 element-animate">
            <div class="media custom-media">
              <img class="mr-3" width="30" src="{{asset('/plantilla_advent/img/img_1.jpg')}}" alt="Generic placeholder image">
              <div class="media-body">
                <h3 class="mt-0"><a href="#">Prayer &amp; Devotional for Children</a></h3>
                <p class="post-meta">May 12, 2018, <a href="#">Children Ministries</a></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed obcaecati, totam recusandae iure non nemo.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 element-animate">
            <div class="media custom-media">
              <img class="mr-3" width="30" src="{{asset('/plantilla_advent/img/img_2.jpg')}}" alt="Generic placeholder image">
              <div class="media-body">
                <h3 class="mt-0"><a href="#">We Must Walk In The Middle of The Road</a></h3>
                <p class="post-meta">May 12, 2018, <a href="#">Missions</a></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed obcaecati, totam recusandae iure non nemo.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 element-animate">
            <div class="media custom-media">
              <img class="mr-3" width="30" src="{{asset('/plantilla_advent/img/img_3.jpg')}}" alt="Generic placeholder image">
              <div class="media-body">
                <h3 class="mt-0"><a href="#">Tracts Giving</a></h3>
                <p class="post-meta">May 12, 2018, <a href="#">Care Ministry</a></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed obcaecati, totam recusandae iure non nemo.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  @endsection
    
  