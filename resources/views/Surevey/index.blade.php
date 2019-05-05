@extends('Surevey.layoutfrontend.master')

@section ('content')
<section id="featured">
        <!-- start slider -->
        <!-- Slider -->
        <div id="nivo-slider">
          <div class="nivo-slider">
            <!-- Slide #1 image -->
            <img src="img/slides/nivo/bg-1.jpg" alt="" title="#caption-1" />
            <!-- Slide #2 image -->
            <img src="img/slides/nivo/bg-2.jpg" alt="" title="#caption-2" />
            <!-- Slide #3 image -->
            <img src="img/slides/nivo/bg-3.jpg" alt="" title="#caption-3" />
          </div>
          <div class="container">
            <div class="row">
              <div class="span12">
                <!-- Slide #1 caption -->
                <div class="nivo-caption" id="caption-1">
                  <div>
                    <h2><strong>Get the answer you need</strong></h2>
                    <h2><strong>or answer to get more points</strong></h2>
                  </div>
                </div>
                <!-- Slide #2 caption -->
                <div class="nivo-caption" id="caption-2">
                    <div>
                        <h2><strong>Get the answer you need</strong></h2>
                        <h2><strong>or answer to get more points</strong></h2>
                      </div>
                </div>
                <!-- Slide #3 caption -->
                <div class="nivo-caption" id="caption-3">
                    <div>
                        <h2><strong>Get the answer you need</strong></h2>
                        <h2><strong>or answer to get more points</strong></h2>
                      </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end slider -->
      </section>
      <section id="content">
          <div class="container">
            <div class="row">
              <div class="span12">
                <ul class="portfolio-categ filter">
                  <li class="all active"><a href="#">All</a></li>
                  <li class="politik"><a href="#" title="">Politik</a></li>
                  <li class="teknik-informatika"><a href="#" title="">Teknik Informatika</a></li>
                  <li class="psikologi"><a href="#" title="">Psikologi</a></li>
                </ul>
                <div class="clearfix">
                </div>
                <div class="row">
                  <section id="projects">
                    <ul id="thumbs" class="portfolio">
                      
                      <!-- Item Project and Filter Name -->
                      <li class="item-thumbs span4 design" data-id="id-0" data-type="politik">
                        <a href="#" class="btn btn-theme">Join</a>              
                        <!-- Thumb Image and Description -->
                        <img src="img/works/thumbs/image-01.jpg" >
                        <h6>Politik</h6>
                        <p>
                            Persepsi millenial terhadap pemilu 2019
                          </p>
                      </li>
                      <!-- End Item Project -->
                      <!-- Item Project and Filter Name -->
                      <li class="item-thumbs span4 design" data-id="id-1" data-type="teknik-informatika">
                          <a href="#" class="btn btn-theme">Join</a> 
                        <img src="img/works/thumbs/image-02.jpg" >
                        <h6>Teknik Informatika</h6>
                        <p>
                            Digitalisasi pengelolaan kost
                          </p>
                      </li>
                      <!-- End Item Project -->
                      <!-- Item Project and Filter Name -->
                      <li class="item-thumbs span4 photography" data-id="id-2" data-type="psikologi">
                          <a href="#" class="btn btn-theme">Join</a>
                        <!-- Thumb Image and Description -->
                        <img src="img/works/thumbs/image-03.jpg" ">
                        <h6>Psikologi</h6>
                        <p>
                            Awareness of mental health
                          </p>
                      </li>
                      <!-- End Item Project -->
                     
                    </ul>
                  </section>
      <section class="callaction">
        <div class="container">
          <div class="row">
            <div class="span12">
              <div class="big-cta">
               
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section id="bottom">
        <div class="container">
          <div class="row">
            <div class="span12">
              <div class="aligncenter">
                <div id="twitter-wrapper">
                  <div id="twitter">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection