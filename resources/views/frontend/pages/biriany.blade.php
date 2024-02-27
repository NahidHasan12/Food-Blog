
@extends('layouts.frontend')
@section("title","Biriany")
@section('frontend_style')
<style>
    .recent_post:hover{
        box-shadow: 0 2px 10px 1px black;
        transition: all 0.5s;
        transform: scale(1.01,1.01);
    }
</style>
@endsection

{{-- end style section  --}}

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{ asset('/frontend') }}/images/banner/banner1.jpg)">
    <div class="banner-text">
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class="banner-heading">
                  <h1 class="banner-title">Biriany</h1>
                </div>
            </div>
          </div>
      </div>
    </div>
  </div>

  <section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-4 mb-2">
                <div class="card p2 border border-dark recent_post">
                    <div class="row">
                    <div class="col-12">
                        <img style="height: 200px; width:100%" src="{{ asset('backend/admin_img/17079164311564580920.png') }}" alt="">
                    </div>
                    </div>
                    <div class="row mt-2 text-center">
                        <div class="col-12">
                            <h4>This is Post title</h4>
                            <p class="p-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                            <hr>
                            <a style="margin-top: -40px" href="" class="btn btn-sm btn-dark">View Post</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-2">
                <div class="card p2 border border-dark recent_post">
                    <div class="row">
                    <div class="col-12">
                        <img style="height: 200px; width:100%" src="{{ asset('backend/admin_img/17079164311564580920.png') }}" alt="">
                    </div>
                    </div>
                    <div class="row mt-2 text-center">
                        <div class="col-12">
                            <h4>This is Post title</h4>
                            <p class="p-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                            <hr>
                            <a style="margin-top: -40px" href="" class="btn btn-sm btn-dark">View Post</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-2">
                <div class="card p2 border border-dark recent_post">
                    <div class="row">
                    <div class="col-12">
                        <img style="height: 200px; width:100%" src="{{ asset('backend/admin_img/17079164311564580920.png') }}" alt="">
                    </div>
                    </div>
                    <div class="row mt-2 text-center">
                        <div class="col-12">
                            <h4>This is Post title</h4>
                            <p class="p-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                            <hr>
                            <a style="margin-top: -40px" href="" class="btn btn-sm btn-dark">View Post</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-2">
                <div class="card p2 border border-dark recent_post">
                    <div class="row">
                    <div class="col-12">
                        <img style="height: 200px; width:100%" src="{{ asset('backend/admin_img/17079164311564580920.png') }}" alt="">
                    </div>
                    </div>
                    <div class="row mt-2 text-center">
                        <div class="col-12">
                            <h4>This is Post title</h4>
                            <p class="p-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                            <hr>
                            <a style="margin-top: -40px" href="" class="btn btn-sm btn-dark">View Post</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-2">
                <div class="card p2 border border-dark recent_post">
                    <div class="row">
                    <div class="col-12">
                        <img style="height: 200px; width:100%" src="{{ asset('backend/admin_img/17079164311564580920.png') }}" alt="">
                    </div>
                    </div>
                    <div class="row mt-2 text-center">
                        <div class="col-12">
                            <h4>This is Post title</h4>
                            <p class="p-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                            <hr>
                            <a style="margin-top: -40px" href="" class="btn btn-sm btn-dark">View Post</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-2">
                <div class="card p2 border border-dark recent_post">
                    <div class="row">
                    <div class="col-12">
                        <img style="height: 200px; width:100%" src="{{ asset('backend/admin_img/17079164311564580920.png') }}" alt="">
                    </div>
                    </div>
                    <div class="row mt-2 text-center">
                        <div class="col-12">
                            <h4>This is Post title</h4>
                            <p class="p-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                            <hr>
                            <a style="margin-top: -40px" href="" class="btn btn-sm btn-dark">View Post</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
