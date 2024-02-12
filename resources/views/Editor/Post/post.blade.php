
@extends('layouts.editor')
@section("title","Editor Post")

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
            <a  class="btn btn-sm" style="background: #6f42c1; color:white; font-weight: bold;" data-toggle="modal" data-target="#post_store"> <i style="font-size:15px" class="mdi mdi-pen"></i>Add Post</a>
        </div>
        <div class="row">
            <div class="card w-100">
                <div class="card-header d-flex justify-content-between">
                    <div>
                        <form action="{{ route('editor.post.search_post') }}" method="GET">
                            @csrf
                            <select style="width: 300px; float:left; margin-right: 5px" name="post_search" class="form-control select2">
                                    <option selected disabled>id or title</option>
                                    <option>All Post</option>
                                    @forelse ($search_post as $item)
                                        <option value="{{ $item->id }}">({{ $item->id }}) {{ $item->title }}</option>
                                    @empty
                                        <span class="text-danger">Do Category Found</span>
                                    @endforelse
                            </select>
                            <button style="height:28px; padding-top:5px; margin-top: 2px; font-weight:bold; background:#6f42c1; color:white" type="submit" class="btn btn-sm">Find</button>
                        </form>
                    </div>
                    <div>
                        <form action="{{ route('editor.post.cat_wise_post') }}" method="GET">
                            @csrf
                            <select style="width: 300px; float:left; margin-right: 5px" name="cat_wise_post" class="form-control select2">
                                    <option selected disabled>Category Wise Search</option>
                                    <option>all Category</option>
                                @forelse ($category as $item)
                                    <option value="{{ $item->id }}"> ({{ $item->id }}) {{ $item->name }} </option>
                                @empty
                                    <span class="text-danger">Do Category Found</span>
                                @endforelse
                            </select>
                            <button style="height:28px; padding-top:5px; margin-top: 2px; font-weight:bold; background:#6f42c1; color:white" type="submit" class="btn btn-sm">Find</button>
                        </form>
                    </div>
                    <h4 style="color:#6f42c1" class="card-title"> All Post</h4>
                </div>
            </div>
        </div>

        {{-- all post --}}

        <div class="row">
            @forelse ($post as $item)
                <div class="col-6 mt-2">
                    <div style="border: 1px solid rgb(65, 0, 122)" class="card p-3">
                        <div class="row">
                            <div class="col-4">
                                <img width="130" height="100" src="{{ asset('backend/post_img/'.$item->image) }}" alt="{{ $item->image }}">
                            </div>
                            <div class="col-8">
                                <h4>{{ $item->title }}</h4>
                                <p>{{ $item->category->name }}</p>
                                <div>
                                    <a title="View Post" style="height:28px; padding-top:5px; background: #6f42c1; color:white; font-weight: bold;" href="{{ route('post.view',$item->id) }}" class="btn btn-sm"><i class="mdi mdi-eye"></i></a>
                                    <a title="Edit Post" style="height:28px; padding-top:5px; background: #060e64; color:white; font-weight: bold;" href="{{ route('post.edit',$item->id) }}" class="btn btn-sm"><i class="mdi mdi-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-danger text-center">No Post Found</p>
            @endforelse



        </div>

    </div>
</div>

@include('Editor.Post.modal.store')
@endsection
