
@extends('layouts.frontend')
@section("title",$post->title)
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
        <div class="row mb-2">
            <div class="col-8 border border-dark">
                <div class="row p-1">
                    <img style="width: 95%; height:400px; border-radius:10px; margin: 0 auto;" src="{{ asset('backend/post_img/'.$post->image) }}" alt="">
                </div>
                <div class="row p-1">
                    <div class="col ml-1">
                        {{-- sow category  --}}
                        <b>Category : </b> {{ $post->category->name }}
                    </div>
                </div>
                <div class="row p-4">
                    <h3 class="mb-2">{{ $post->title }}</h3>
                    {!! $post->details !!}
                </div>
            </div>
        </div>

    </div>
  </section>
@endsection
