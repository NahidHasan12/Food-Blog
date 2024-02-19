@extends('layouts.frontend')
@section("title","Home")

@section('content')

    @include('frontend.include.slider')

  <section class="call-to-action-box no-padding">
    <div class="container">
      <div style="height: 70px" class="action-style-box">
          <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-left">
                <div style="margin-top: -15px" class="call-to-action-text">
                  <h3 class="action-title">We understand your needs on Receipes</h3>
                </div>
            </div>
            <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                <div style="margin-top: -15px" class="call-to-action-btn">
                  <a class="btn btn-dark" href="{{ route('pages.category') }}">Categories</a>
                </div>
            </div>
          </div>
      </div>
    </div>
  </section>

  <section id="news" class="news">
    <div class="container">
      <div class="row text-center">
          <div class="col-12">
            <h2 class="section-title">The whole of cooking</h2>
            <h3 class="section-sub-title">Recent Receipes</h3>
          </div>
      </div>
      <!--/ Title row end -->

      <div class="row">
        @foreach ($recent as $item)
            <div class="col-lg-4 col-md-6 mb-4">
            <div class="latest-post">
                <div class="latest-post-media">
                    <a href="news-single.html" class="latest-post-img">
                        <img loading="lazy" width="250" height="200" class="img-fluid" src="{{ asset('backend/post_img/'.$item->image) }}" alt="{{ $item->image }}">
                    </a>
                </div>
                <div class="post-body">
                    <h4 class="post-title">
                        <a href="" class="d-inline-block">{{ $item->title }}</a>
                    </h4>
                    <div class="latest-post-meta">
                        <span class="post-item-date">
                        <i class="fa fa-clock-o"></i> {{ date('d-M-Y', strtotime($item->created_at)) }}
                        </span>
                    </div>
                </div>
            </div>
            </div>
        @endforeach
        </div>

      <div class="general-btn text-center mt-4">
          <a class="btn btn-primary" href="">See All Recipe</a>
      </div>
    </div>
  </section>




  <section id="project-area" class="project-area solid-bg">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-12">
          <h2 class="section-title">Our delicious recipes</h2>
          <h3 class="section-sub-title">All Racipes</h3>
        </div>
      </div>


      <div class="row">

        <div class="col-12">
          <div class="general-btn text-center">
            <a class="btn btn-primary" href="{{ route('pages.category') }}">View All Recipe</a>
          </div>
        </div>

      </div>
    </div>
  </section>





@endsection
