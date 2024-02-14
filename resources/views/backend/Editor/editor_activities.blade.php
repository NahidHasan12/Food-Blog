
@extends('layouts.admin')
@section("title","Employe Activities")

@section('content')

<div class="content-wrapper">
    <div class="content">
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
                <div style="border: 1px solid rgb(65, 0, 122); font-weight:bold" class="card p-3 w-100 mb-3 ml-5">
                    <div class="card-header">
                        <h4 class="card-title">Employe AActivities</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-borderless">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Employe Image</th>
                                    <th>Employe Name</th>
                                    <th>Activities</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($editor as $key=>$item)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>
                                        <img width="100" height="80" src="{{ asset('backend/editor/'.$item->image) }}" alt="{{ $item->image }}">
                                    </td>
                                        <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                                    <td>
                                        <a title="See Activities" href="{{ route('admin.editor.post',$item->id) }}" class="btn btn-sm btn-outline-primary"> <i class="mdi mdi-eye"></i></a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center text-danger">No Data Found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection

@push('script')
<script>

</script>
@endpush
