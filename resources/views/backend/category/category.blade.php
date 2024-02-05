
@extends('layouts.admin')
@section("title","Dashboard")

@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <a href="" class="btn btn-sm" style="background: #6f42c1; color:white; font-weight: bold;" data-toggle="modal" data-target="#cat_store"> <i style="font-size:15px" class="mdi mdi-pen"></i>Add Category</a>
        </div>
        <div class="row">
             <div class="ml-5">
                @if (session()->has('success'))
                    <div style="font-size: 15px; color:white" class="badge d-block bg-warning">{{ session()->get('success') }}</div>
                @elseif(session()->get('error'))
                    <div style="font-size: 15px; color:white" class="badge d-block bg-danger">{{ session()->get('error') }}</div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="card w-100">
                <div class="card-header d-flex justify-content-between">
                    <div>
                        <form action="" method="GET">
                            @csrf
                            <select style="width: 300px; float:left; margin-right: 5px" name="post_search" class="form-control select2">
                                <option selected disabled>id or category</option>
                                <option value="">Fast Food</option>
                                <option value="">Biriany</option>
                                <option value="">Jank Food</option>
                            </select>
                            <button style="height:28px; padding-top:5px; margin-top: 2px; font-weight:bold; background:#6f42c1; color:white" type="submit" class="btn btn-sm">Find</button>
                        </form>
                    </div>
                    <h4 style="color:#6f42c1" class="card-title"> All Category</h4>
                </div>
            </div>
        </div>

        {{-- all Category --}}

        <div class="row">
            <div style="border: 1px solid rgb(65, 0, 122); font-weight:bold" class="card p-3 w-100">
                <table class="table table-sm table-hover">
                    <tr style="color: white; background:#6f42c1">
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Category Slug</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($category as $key=>$item)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->slug }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a href="{{ route('category.edit',$item->id) }}" title="Edit Category" style="height:28px; padding-top:5px; background: #060e64; color:white; font-weight: bold;" class="btn btn-sm"><i class="mdi mdi-pencil"></i></a>
                                <a href="{{ route('category.delete',$item->id) }}" title="Delete Category" style="height:28px; padding-top:5px; background: #7f0303; color:white; font-weight: bold;" class="btn btn-sm"><i class="mdi mdi-delete-sweep"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4"></td>
                        </tr>
                    @endforelse

                </table>
            </div>
        </div>



    </div>
</div>


@include('backend.category.Modal.store')
@endsection

@push('script')
<script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
</script>
@endpush
