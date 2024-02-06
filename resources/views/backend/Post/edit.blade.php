
@extends('layouts.admin')
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
            <a href="{{ route('page.post') }}" title="Back" class="btn btn-sm btn-outline-danger"> <i style="font-size:15px" class="mdi mdi-arrow-left-bold"></i></a>
        </div>

        <div class="row mt-4">
            <div class="card w-100">
                <div class="card-header">
                    <h4 class="card-title">Edit Post</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="title" class="form-label"> Post Title</label>
                                    <input type="text" value="{{ $post->title }}" name="title" class="form-control">
                                </div>
                                <div class="mb-2">
                                    <label for="category" class="form-label">Select Category</label> <br>
                                    <select style="width:300px" class="form-control select2" name="category" id="category">
                                        @forelse ($cat as $item)
                                            <option value="{{ $item->id }}" {{ $post->category->id == $item->id ? 'selected' : '' }}> {{ $item->name }} </option>
                                        @empty
                                            <span class="text-danger text-center">No Category Found</span>
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
                                <select class="form-control" name="status" id="status">
                                  <option value="1" {{ $post->id == 1 ? 'selected' : '' }}>Active</option>
                                  <option value="0" {{ $post->id == 0 ? 'selected' : '' }}>Deactive</option>
                                </select>
                              </div>
                              <div class="mb-2">
                                <label for="image" class="form-label"> Post Image</label>
                                <input type="file" name="image" class="form-control dropify">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <label for="title" class="form-label"> Post Articel</label>
                            <textarea id="summernote" name="details" class="form-control" cols="30" rows="10">
                                {{ $post->details }}
                            </textarea>
                          </div>
                        </div>

                </div>
                        <div class="modal-footer">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <button type="submit" class="btn btn-primary submit_btn">Save</button>
                        </div>
                   </form>
            </div>
        </div>

    </div>
</div>

@endsection
