@extends('layouts.frontend')
@section("title","Aboute")

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
    <div class="banner-text">
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class="banner-heading">
                  <h1 class="banner-title">About</h1>
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">company</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                      </ol>
                  </nav>
                </div>
            </div><!-- Col end -->
          </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Banner text end -->
  </div><!-- Banner area end -->

  <section id="main-container" class="main-container">
    <div class="container">
      <div class="row">
          <div class="col-lg-6">
            <h3 class="column-title">Who We Are</h3>
            <p>when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.</p>
            <blockquote><p>Semporibus autem quibusdam et aut officiis debitis aut rerum est aut optio cumque nihil necessitatibus autemn ec tincidunt nunc posuere ut</p></blockquote>
            <p>He lay on his armour-like  back, and if he lifted. ultrices ultrices sapien, nec tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing.</p>

          </div><!-- Col end -->

          <div class="col-lg-6 mt-5 mt-lg-0">

            <div id="page-slider" class="page-slider small-bg">

                <div class="item" style="background-image:url(images/slider-pages/slide-page1.jpg)">
                  <div class="container">
                      <div class="box-slider-content">
                        <div class="box-slider-text">
                            <h2 class="box-slide-title">Leadership</h2>
                        </div>
                      </div>
                  </div>
                </div><!-- Item 1 end -->

                <div class="item" style="background-image:url(images/slider-pages/slide-page2.jpg)">
                  <div class="container">
                      <div class="box-slider-content">
                        <div class="box-slider-text">
                            <h2 class="box-slide-title">Relationships</h2>
                        </div>
                      </div>
                  </div>
                </div><!-- Item 1 end -->

                <div class="item" style="background-image:url(images/slider-pages/slide-page3.jpg)">
                  <div class="container">
                      <div class="box-slider-content">
                        <div class="box-slider-text">
                            <h2 class="box-slide-title">Performance</h2>
                        </div>
                      </div>
                  </div>
                </div><!-- Item 1 end -->
            </div><!-- Page slider end-->


          </div><!-- Col end -->
      </div><!-- Content row end -->

    </div><!-- Container end -->
  </section><!-- Main container end -->


  <section id="facts" class="facts-area dark-bg">
    <div class="container">
      <div class="facts-wrapper">
          <div class="row">
            <div class="col-md-3 col-sm-6 ts-facts">
                <div class="ts-facts-img">
                  <img loading="lazy" src="images/icon-image/fact1.png" alt="facts-img">
                </div>
                <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="1789">0</span></h2>
                  <h3 class="ts-facts-title">Total Projects</h3>
                </div>
            </div><!-- Col end -->

            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                <div class="ts-facts-img">
                  <img loading="lazy" src="images/icon-image/fact2.png" alt="facts-img">
                </div>
                <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="647">0</span></h2>
                  <h3 class="ts-facts-title">Staff Members</h3>
                </div>
            </div><!-- Col end -->

            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                <div class="ts-facts-img">
                  <img loading="lazy" src="images/icon-image/fact3.png" alt="facts-img">
                </div>
                <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span></h2>
                  <h3 class="ts-facts-title">Hours of Work</h3>
                </div>
            </div><!-- Col end -->

            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                <div class="ts-facts-img">
                  <img loading="lazy" src="images/icon-image/fact4.png" alt="facts-img">
                </div>
                <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="44">0</span></h2>
                  <h3 class="ts-facts-title">Countries Experience</h3>
                </div>
            </div><!-- Col end -->

          </div> <!-- Facts end -->
      </div>
      <!--/ Content row end -->
    </div>
    <!--/ Container end -->
  </section><!-- Facts end -->

  <section id="ts-team" class="ts-team">
    <div class="container">
      <div class="row text-center">
          <div class="col-lg-12">
            <h2 class="section-title">Quality Service</h2>
            <h3 class="section-sub-title">Professional Team</h3>
          </div>
      </div><!--/ Title row end -->

      <div class="row">
          <div class="col-lg-12">
            <div id="team-slide" class="team-slide">
                <div class="item">
                  <div class="ts-team-wrapper">
                      <div class="team-img-wrapper">
                        <img loading="lazy" class="w-100" src="images/team/team1.jpg" alt="team-img">
                      </div>
                      <div class="ts-team-content">
                        <h3 class="ts-name">Nats Stenman</h3>
                        <p class="ts-designation">Chief Operating Officer</p>
                        <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                        <div class="team-social-icons">
                            <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                        </div><!--/ social-icons-->
                      </div>
                  </div><!--/ Team wrapper end -->
                </div><!-- Team 1 end -->

                <div class="item">
                  <div class="ts-team-wrapper">
                      <div class="team-img-wrapper">
                        <img loading="lazy" class="w-100" src="images/team/team2.jpg" alt="team-img">
                      </div>
                      <div class="ts-team-content">
                        <h3 class="ts-name">Angela Lyouer</h3>
                        <p class="ts-designation">Innovation Officer</p>
                        <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                        <div class="team-social-icons">
                            <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                        </div><!--/ social-icons-->
                      </div>
                  </div><!--/ Team wrapper end -->
                </div><!-- Team 2 end -->

                <div class="item">
                  <div class="ts-team-wrapper">
                      <div class="team-img-wrapper">
                        <img loading="lazy" class="w-100" src="images/team/team3.jpg" alt="team-img">
                      </div>
                      <div class="ts-team-content">
                        <h3 class="ts-name">Mark Conter</h3>
                        <p class="ts-designation">Safety Officer</p>
                        <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                        <div class="team-social-icons">
                            <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                        </div><!--/ social-icons-->
                      </div>
                  </div><!--/ Team wrapper end -->
                </div><!-- Team 3 end -->

                <div class="item">
                  <div class="ts-team-wrapper">
                      <div class="team-img-wrapper">
                        <img loading="lazy" class="w-100" src="images/team/team4.jpg" alt="team-img">
                      </div>
                      <div class="ts-team-content">
                        <h3 class="ts-name">Ayesha Stewart</h3>
                        <p class="ts-designation">Finance Officer</p>
                        <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                        <div class="team-social-icons">
                            <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                        </div><!--/ social-icons-->
                      </div>
                  </div><!--/ Team wrapper end -->
                </div><!-- Team 4 end -->

                <div class="item">
                  <div class="ts-team-wrapper">
                      <div class="team-img-wrapper">
                        <img loading="lazy" class="w-100" src="images/team/team5.jpg" alt="team-img">
                      </div>
                      <div class="ts-team-content">
                        <h3 class="ts-name">Dave Clarkte</h3>
                        <p class="ts-designation">Civil Engineer</p>
                        <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                        <div class="team-social-icons">
                            <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                        </div><!--/ social-icons-->
                      </div>
                  </div><!--/ Team wrapper end -->
                </div><!-- Team 5 end -->

                <div class="item">
                  <div class="ts-team-wrapper">
                      <div class="team-img-wrapper">
                        <img loading="lazy" class="w-100" src="images/team/team6.jpg" alt="team-img">
                      </div>
                      <div class="ts-team-content">
                        <h3 class="ts-name">Elton Joe</h3>
                        <p class="ts-designation">Site Supervisor</p>
                        <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                        <div class="team-social-icons">
                            <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                        </div><!--/ social-icons-->
                      </div>
                  </div><!--/ Team wrapper end -->
                </div><!-- Team 6 end -->

            </div><!-- Team slide end -->
          </div>
      </div><!--/ Content row end -->
    </div><!--/ Container end -->
  </section><!--/ Team end -->
@endsection
