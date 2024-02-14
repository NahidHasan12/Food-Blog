@extends('layouts.admin')
@section("title","Chat")

@section('css')
<style>

    .image-upload > input
    {
        display: none;
    }
    .left_sms{
        background: rgb(17, 19, 127);
        width: 180px;
        min-height: 50px;
        border: 1px solid black;
        color: white;
        font-family: cursive;
        border-radius: 26px 22px 22px 5px;
        padding: 10px;
        margin-bottom: 5px
    }
    .right_sms{
        background: rgb(104, 31, 14);
        width: 180px;
        min-height: 50px;
        border: 1px solid black;
        color: white;
        font-family: cursive;
        border-radius: 22px 26px 5px 22px;
        padding: 10px;
        margin: 0 0 5px 36px;
    }


</style>
@endsection

@section('content')

<div class="content-wrapper">
    <div class="content">

        <div class="row">
            <div class="col-xl-4">
                <div class="card card-default chat">
                        <div class="card-header">
                            <h2>Selena Wagner</h2>
                            <div class="dropdown dropdown-chat-state">
                                <img style="width: 40px; height:40px; border-radius:50%" src="" alt="">
                            </div>
                        </div>
                        <div class="card-body pb-0"  style="height: 280px;">
                            <div style="overflow: auto; height:380px">
                                <!-- Media Chat Left -->
                                @foreach ($ticket as $item)
                                    <div class="right_sms">
                                        <p class="r_text">{{ $item->message }}</p>
                                    </div>
                                @endforeach

                                <div class="left_sms">
                                    <p class="l_text">my name is nahid hasan</p>
                                </div>
                                <!-- Media Chat Right -->


                            </div>
                        </div>
                            <div class="chat-footer">
                                <form method="POST" action="{{ route('admin.ticket.store') }}">
                                    @csrf
                                    <div class="input-group input-group-chat">
                                        <div class="input-group-prepend">
                                        <span class="emoticon-icon mdi mdi-emoticon-happy-outline"></span>
                                        </div>
                                        <div class="input-group-prepend">
                                            <div class="image-upload">
                                                <label style="font-size:18px; color:rgb(207, 59, 5); margin-left:10px; cursor:pointer;" class="mt-2" for="file-input">
                                                    <i title="Upload Image" class="mdi mdi-pinwheel"></i>
                                                </label>

                                                <input id="file-input" type="file"/>
                                            </div>
                                        </div>
                                        <input type="text" name="message" class="form-control" aria-label="Text input with dropdown button">
                                        <button style="margin: 5px; font-size:22px; color:rgb(10, 49, 147)" type="submit"><i class="mdi mdi-send"></i></button>
                                    </div>
                                </form>
                            </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
