

@extends('layouts.admin')
@section("title","Post view")

@section('content')

<div class="content-wrapper">
    <div class="content">

        <div class="row mb-3">
            <div class="card w-100">
               @if (session()->has('success'))
                   <div style="font-size: 15px; color:white" class="badge d-block bg-danger">{{ session()->get('success') }}</div>
               @elseif(session()->get('error'))
                   <div style="font-size: 15px; color:white" class="badge d-block bg-danger">{{ session()->get('error') }}</div>
               @endif
           </div>
       </div>
        <div class="row">
            <a href="{{ route('page.post') }}" title="Back" class="btn btn-sm btn-outline-danger"> <i style="font-size:15px" class="mdi mdi-arrow-left-bold"></i></a>
        </div>


        <div class="row mt-5">

            <div style="border:2px solid rgb(120, 21, 154)" class="card w-100 p-3">
                <h4 style="font-family: cursive">Post All Details</h4>
                <hr>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-12">
                            <img style="border: 3px solid white; border-radius:10px;" width="100%" height="400" src="{{ asset('backend/post_img/'.$post->image) }}" alt="{{ $post->image }}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <table class="table table-sm table-hover table-bordered" style="color: black">
                                <tr>
                                    <th>Post ID</th>
                                    <td>{{ $post->id }}</td>
                                    <th>Post Category</th>
                                    <td>{{ $post->category->name }}</td>
                                    <th>Post Slug</th>
                                    <td>{{ $post->slug }}</td>
                                    <th>Post Status</th>
                                    <td>
                                       @if ($post->status == 1)
                                            <span class="badge badge-success">Active</span>
                                       @elseif ($post->status == 0)
                                            <span class="badge badge-warning">Deactive</span>
                                       @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td class="mt-1">
                                        <a title="Edit Post" style="height:28px; padding-top:5px; background: #060e64; color:white; font-weight: bold;" href="{{ route('admin.post.edit',$post->id) }}" class="btn btn-sm"><i class="mdi mdi-pencil"></i></a>
                                        <a title="Delete Post" style="height:28px; padding-top:5px; background: #7f0303; color:white; font-weight: bold;" href="{{ route('admin.post.delete',$post->id) }}" class="btn btn-sm"><i class="mdi mdi-delete-sweep"></i></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div style="color: black; font-weight:bold" class="row mt-2">
                        <div class="col-12">
                            <h1 class="mb-3">{{ $post->title }}</h1> <hr>
                            {!! $post->details !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
