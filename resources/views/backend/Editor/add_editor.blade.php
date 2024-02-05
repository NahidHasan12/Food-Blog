
@extends('layouts.admin')
@section("title","Dashboard")

@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <a href="" class="btn btn-sm" style="background: #6f42c1; color:white; font-weight: bold;" data-toggle="modal" data-target="#editor_store"> <i style="font-size:15px" class="mdi mdi-pen"></i>Add Employe</a>
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
        <div class="row ml-1 mt-3">
            <div class="row w-100">
                <div style="border: 1px solid rgb(65, 0, 122); font-weight:bold" class="card p-3 w-100">
                    <table class="table table-sm table-hover">
                        <tr style="color: white; background:#6f42c1; text-align:center">
                            <th>#</th>
                            <th>Image</th>
                            <th> Name</th>
                            <th>Slug</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($editor as $key=>$item)
                            <tr class="text-center">
                                <td>{{ ++$key }}</td>
                                <td>
                                    <img width="100px" height="80px" src="{{ asset('backend/editor/'.$item->image) }}" alt="{{ asset('backend/editor/'.$item->image) }}">
                                </td>
                                <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->show_password }}</td>
                                <td>
                                    <a href="" title="Edit Editor" style="height:28px; padding-top:5px; background: #060e64; color:white; font-weight: bold;" class="btn btn-sm"><i class="mdi mdi-pencil"></i></a>
                                    <a href="" title="Delete Editor" style="height:28px; padding-top:5px; background: #7f0303; color:white; font-weight: bold;" class="btn btn-sm"><i class="mdi mdi-delete-sweep"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7"></td>
                            </tr>
                        @endforelse
                    </table>
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
