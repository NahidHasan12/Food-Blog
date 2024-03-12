
@extends('layouts.frontend')
@section("title","All Post")
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


  <section id="main-container" class="main-container">
    <div class="container">

        <div class="row">
            @forelse ($post as $post)
                <div class="col-4 mb-3">
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

    </div>
  </section>
@endsection
