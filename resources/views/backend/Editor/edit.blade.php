
@extends('layouts.admin')
@section("title","Dashboard")

@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <a href="{{ route('admin.editor') }}" title="Back" class="btn btn-sm btn-outline-danger"> <i style="font-size:15px" class="mdi mdi-arrow-left-bold"></i></a>
        </div>
        <div class="row mt-3">
            <div class="card w-100">
                <div>
                    @if (session()->has('success'))
                        <div style="font-size: 15px; color:white" class="badge d-block bg-warning">{{ session()->get('success') }}</div>
                    @elseif(session()->get('error'))
                        <div style="font-size: 15px; color:white" class="badge d-block bg-danger">{{ session()->get('error') }}</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row ml-1 mt-3">
            <div class="row w-100">
                <div style="border: 1px solid rgb(65, 0, 122); font-weight:bold" class="card p-3 w-50 mb-3 ml-5">
                    <div class="card-header">
                        <h4 class="card-title">Edit Editor</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('editor.update',$editor_data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="md-2">
                                <label for="first_name" class="form-label">first Name</label>
                                <input type="text" value="{{ $editor_data->first_name }}" name="first_name" class="form-control">
                                @error('first_name')
                                    <span class="bg-light text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="md-2">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" value="{{ $editor_data->last_name }}" name="last_name" class="form-control">
                                @error('last_name')
                                    <span class="bg-light text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="md-2">
                                <label for="email" class="form-label">Email</label>
                            <input type="text" value="{{ $editor_data->email }}" name="email" class="form-control">
                                @error('email')
                                    <span class="bg-light text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="md-2">
                                <label for="Password" class="form-label">Password</label>
                                <input type="text" value="{{ $editor_data->show_password }}" name="password" class="form-control">
                                @error('password')
                                    <span class="bg-light text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="md-2">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="md-2">
                                <img width="100" height="80" src="{{ asset('backend/editor/'.$editor_data->image) }}" alt="{{ $editor_data->image }}">
                            </div>
                            <div style="float: right">
                                <button style="height:28px; padding-top:5px; margin-top: 2px; font-weight:bold; background:#6f42c1; color:white" type="submit" class="btn btn-sm">Save & Change</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


@include('backend.Editor.Modal.store')
@endsection

@push('script')
<script>

</script>
@endpush
