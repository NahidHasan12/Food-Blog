
@extends('layouts.editor')
@section("title","Edit Post")

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
            <a href="{{ route('editor.post') }}" title="Back" class="btn btn-sm btn-outline-danger"> <i style="font-size:15px" class="mdi mdi-arrow-left-bold"></i></a>
        </div>

        <div class="row mt-4">
            <div class="card w-100">
                <div class="card-header">
                    <h4 class="card-title">Edit Post</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ route('post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="form-label">Post Title</label>
                                    <input type="text" class="form-control" value="{{ $post->title }}" name="title">
                                </div>
                                <div class="mb-2">
                                    <label for="category" class="form-label">Select Category</label>
                                    <select name="category" id="category" class="form-control">
                                        @forelse ($cat as $cat)
                                            <option value="{{ $cat->id}}" {{ $post->category_id == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                        @empty

                                        @endforelse
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <img width="300" height="250" src="{{ asset('backend/post_img/'.$post->image) }}" alt="{{ $post->image }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="status" class="form-label">Select Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1" {{ $post->status == '1' ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $post->status == '0' ? 'selected' : '' }}>Deactive</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="image" class="form-label">Upload Image</label>
                                    <input type="file" name="image" id="image" class="form-controll dropify">
                                </div>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="mb-2">
                                <label for="details" class="form-label">Write The Post Artical</label>
                                <textarea name="details" class="form-control " id="summernote" cols="40" rows="10">
                                    {{ $post->details }}
                                </textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-4 mt-5 ml-5">
                            <div class="text-end">
                                <button type="submit" class="btn btn-sm btn-success">Save & Change</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
