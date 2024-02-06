
@extends('layouts.admin')
@section("title","Category Edit")

@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <a href="{{ route('page.category') }}" class="btn btn-sm btn-outline-danger mb-3"><i style="font-size:15px" class="mdi mdi-arrow-left-bold"></i></a>
        </div>
        <div class="row">
            <div style="border: 1px solid rgb(65, 0, 122); font-weight:bold" class="card p-3 w-100">
                <form action="{{ route('category.update',$category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="md-2">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text" value="{{ $category->name }}" name="name" class="form-control" id="name">
                    </div>
                    <div class="text-end">
                        <button style="height:28px; padding-top:5px; margin-top: 2px; font-weight:bold; background:#6f42c1; color:white" type="submit" class="btn btn-sm">Update</button>
                    </div>
                </form>
            </div>
        </div>



    </div>
</div>

@endsection

@push('script')
<script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
</script>
@endpush
