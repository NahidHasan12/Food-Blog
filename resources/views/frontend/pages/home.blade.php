@extends('layouts.frontend')
@section("title","Home")
@section('frontend_style')
<style>
    .recent_post:hover{
        box-shadow: 0 2px 10px 1px black;
        transition: all 0.5s;
        transform: scale(1.01,1.01);
    }
</style>
@endsection
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
                  <a class="btn btn-dark" href="{{ route('pages.all_post') }}">All Recipe</a>
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

      {{-- post --}}
        <div class="row">
            @forelse ($recent as $recent)
                <div class="col-4">
                    <div class="card p2 border border-dark recent_post">
                        <div class="row">
                        <div class="col-12">
                            <img style="height: 200px; width:100%" src="{{ asset('backend/post_img/'.$recent->image) }}" alt="">
                        </div>
                        </div>
                        <div class="row mt-2 text-center">
                            <div class="col-12">
                                <h4>{{ $recent->title }}</h4>
                                    {!! Str::limit($recent->details, 80, '...') !!}
                                <hr>
                                <a style="margin-top: -40px" href="{{ route('pages.single',$recent->id) }}" class="btn btn-sm btn-dark">View Post</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-4">
                    <div class="card p2 border border-dark recent_post">
                        <h3 class="text-danger text-center">NO Post Found</h3>
                    </div>
                </div>
            @endforelse

        </div>

    <div class="general-btn text-center mt-4">
      <a class="btn btn-primary" href="{{ route('pages.recent') }}">See All Recipe</a>
  </div>
  </section>




  <section id="project-area" class="project-area solid-bg">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
            <h2 class="section-title">Our delicious recipes</h2>
            <h3 class="section-sub-title">Biriany</h3>
            </div>
        </div>
        {{-- post --}}
        <div class="row">
            @forelse ($biriany as $post)
                <div class="col-4">
                    <div class="card p2 border border-dark recent_post">
                        <div class="row">
                        <div class="col-12">
                            <img style="height: 200px; width:100%" src="{{ asset('backend/post_img/'.$post->image) }}" alt="{{ $post->image }}">
                        </div>
                        </div>
                        <div class="row mt-2 text-center">
                            <div class="col-12">
                                <h4>{{ $post->title }}</h4>
                                    {!! Str::limit($post->details, 80, '...') !!}
                                <hr>
                                <a style="margin-top: -40px" href="{{ route('pages.single',$post->id) }}" class="btn btn-sm btn-dark">View Post</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-4">
                    <div class="card p2 border border-dark recent_post">
                        <h3 class="text-danger text-center">NO Post Found</h3>
                    </div>
                </div>
            @endforelse
        </div>

        <div class="row">
            <div class="col-12">
            <div class="general-btn text-center">
                <a class="btn btn-primary" href="{{ route('pages.biriany') }}">View All Recipe</a>
            </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-lg-12">
            <h3 class="section-sub-title">Diet Food</h3>
            </div>
        </div>
        {{-- post --}}
        <div class="row">
            @forelse ($diet as $diet)
                <div class="col-4">
                    <div class="card p2 border border-dark recent_post">
                        <div class="row">
                        <div class="col-12">
                            <img style="height: 200px; width:100%" src="{{ asset('backend/post_img/'.$diet->image) }}" alt="{{ $diet->image }}">
                        </div>
                        </div>
                        <div class="row mt-2 text-center">
                            <div class="col-12">
                                <h4>{{ $diet->title }}</h4>
                                    {!! Str::limit($diet->details, 80, '...') !!}
                                <hr>
                                <a style="margin-top: -40px" href="{{ route('pages.single',$diet->id) }}" class="btn btn-sm btn-dark">View Post</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-4">
                    <div class="card p2 border border-dark recent_post">
                        <h3 class="text-danger text-center">NO Post Found</h3>
                    </div>
                </div>
            @endforelse
        </div>

        <div class="row">
            <div class="col-12">
            <div class="general-btn text-center">
                <a class="btn btn-primary" href="{{ route('pages.diet_food') }}">View All Recipe</a>
            </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-lg-12">
            <h3 class="section-sub-title">Fast Food</h3>
            </div>
        </div>
        {{-- post --}}
        <div class="row">
            @forelse ($fast as $fast)
                <div class="col-4">
                    <div class="card p2 border border-dark recent_post">
                        <div class="row">
                        <div class="col-12">
                            <img style="height: 200px; width:100%" src="{{ asset('backend/post_img/'.$fast->image) }}" alt="{{ $fast->image }}">
                        </div>
                        </div>
                        <div class="row mt-2 text-center">
                            <div class="col-12">
                                <h4>{{ $fast->title }}</h4>
                                    {!! Str::limit($fast->details, 80, '...') !!}
                                <hr>
                                <a style="margin-top: -40px" href="{{ route('pages.single',$fast->id) }}" class="btn btn-sm btn-dark">View Post</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-4">
                    <div class="card p2 border border-dark recent_post">
                        <h3 class="text-danger text-center">NO Post Found</h3>
                    </div>
                </div>
            @endforelse
        </div>

        <div class="row">
            <div class="col-12">
            <div class="general-btn text-center">
                <a class="btn btn-primary" href="{{ route('pages.fast_food') }}">View All Recipe</a>
            </div>
            </div>
        </div>
    </div>
  </section>





@endsection
