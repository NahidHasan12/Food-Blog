
@extends('layouts.admin')
@section("title","Dashboard")

@section('content')

<div class="content-wrapper">
    <div class="content">

        <div class="row">
            <div style="border: 1px solid rgb(65, 0, 122); font-weight:bold" class="card p-3 w-100">
                {{-- <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-6">
                        <div class="mb-2">
                            <label for="logo" ></label>
                        </div>
                    </div>
                    <div class="col-6"></div>
                </form> --}}
                <h1 class="text-center"> Web Settings</h1>
            </div>
        </div>



    </div>
</div>

@endsection
