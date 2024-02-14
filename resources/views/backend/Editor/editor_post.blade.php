
@extends('layouts.admin')
@section("title","Employe Wise Post")

@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <a href="{{ route('admin.editor.activities') }}" title="Back" class="btn btn-sm btn-outline-danger"> <i style="font-size:15px" class="mdi mdi-arrow-left-bold"></i></a>
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
        <div class="row">
            <div class="card p-3 ml-3">
                <p style="font-weight: bold; font-size:20px; color:black"> Total Post : <span style="color: red">{{ $count_post }}</span> </p>
            </div>
        </div>
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
                                    <a title="View Post" style="height:28px; padding-top:5px; background: #6f42c1; color:white; font-weight: bold;" href="{{ route('admin.post.view',$item->id) }}" class="btn btn-sm"><i class="mdi mdi-eye"></i></a>
                                    <a title="Edit Post" style="height:28px; padding-top:5px; background: #060e64; color:white; font-weight: bold;" href="{{ route('admin.post.edit',$item->id) }}" class="btn btn-sm"><i class="mdi mdi-pencil"></i></a>
                                    <a title="Delete Post" style="height:28px; padding-top:5px; background: #7f0303; color:white; font-weight: bold;" href="{{ route('admin.post.delete',$item->id) }}" class="btn btn-sm"><i class="mdi mdi-delete-sweep"></i></a>
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

@endsection

@push('script')
<script>

</script>
@endpush
