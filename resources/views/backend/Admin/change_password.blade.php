
@extends('layouts.admin')
@section("title","Change Admin Password")

@section('content')

<div class="content-wrapper">
    <div class="content">

        <div class="row mb-2">
            <div class="card w-100">
               @if (session()->has('success'))
                   <div style="font-size: 15px; color:white" class="badge d-block bg-danger">{{ session()->get('success') }}</div>
               @elseif(session()->get('error'))
                   <div style="font-size: 15px; color:white" class="badge d-block bg-danger">{{ session()->get('error') }}</div>
               @endif
           </div>
       </div>

       <div class="row">
        <div style="border: 2px solid rgb(134, 9, 175)" class="card ml-5 w-100">
                <h4 style="padding:5px; margin-left:20px; margin-top:10px; font-weight:bold; font-family:cursive">
                    Change Admin Password
                </h4>
                <hr>
            <div style="border-top:2 solid rgb(134, 9, 175)" class="card-body">
                <form action="{{ route('admin.forget_password',$admin->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" value="{{ $admin->first_name }}" name="first_name" id="first_name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" value="{{ $admin->last_name }}" name="last_name" id="last_name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" value="{{ $admin->email }}" name="email" id="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" value="{{ $admin->view_password }}" name="password" id="password" class="form-control">
                            </div>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="image" class="form-label">Admin Image</label>
                                <input type="file" name="image" class="form-control dropify">
                            </div>
                            <div class="mb-2">
                                <img width="435" height="190" src="{{ asset('backend/admin_img/'.$admin->image) }}" alt="{{ $admin->image }}">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-5">
                        <button style="background: black; color:white; font-weight:bold; margin-left:10px" type="submit" class="btn btn-sm">Save & Change</button>
                    </div>
                </form>
            </div>
        </div>
       </div>

    </div>
</div>

@endsection
