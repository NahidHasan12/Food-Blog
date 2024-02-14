@extends('layouts.admin')
@section("title","Dashboard")

@section('css')
<style>

    .image-upload > input
    {
        display: none;
    }
    .left_sms{
        background: rgb(101, 27, 133);
        width: 180px;
        min-height: 50px;
        border: 1px solid black;
        color: white;
        border-radius: 26px 22px 22px 5px;
        padding: 10px;
        margin-bottom: 5px
    }
    .right_sms{
        background: rgb(37, 126, 34);
        width: 180px;
        min-height: 50px;
        border: 1px solid black;
        color: white;
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
                <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini">
                    <div class="card-header">
                        <h2 style="margin-left: 50px">{{ $total_post }}</h2>
                        <div class="sub-title">
                            <span class="mr-1">Total Post</span> |
                            <span class="mx-1">25%</span>
                            <i class="mdi mdi-arrow-up-bold text-success"></i>
                        </div>
                    </div>
                    <div class="card-body">
                    <div class="chart-wrapper">
                        <div>
                        <div id="spline-area-1"></div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini">
                    <div class="card-header">
                    <h2 style="margin-left: 50px">{{ $total_category }}</h2>
                    <div class="sub-title">
                        <span class="mr-1">Total Category</span> |
                        <span class="mx-1">45%</span>
                        <i class="mdi mdi-arrow-down-bold text-danger"></i>
                    </div>
                    </div>
                    <div class="card-body">
                    <div class="chart-wrapper">
                        <div>
                        <div id="spline-area-2"></div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini">
                    <div class="card-header">
                    <h2>$4199</h2>
                    <div class="sub-title">
                        <span class="mr-1">Profit of this year</span> |
                        <span class="mx-1">20%</span>
                        <i class="mdi mdi-arrow-down-bold text-danger"></i>
                    </div>
                    </div>
                    <div class="card-body">
                    <div class="chart-wrapper">
                        <div>
                        <div id="spline-area-3"></div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6">

                </div>
            </div>


            <div class="row">
            <div class="col-xl-8">

                <!-- Income and Express -->
                <div class="card card-default">
                <div class="card-header">
                    <h2>Income And Expenses</h2>
                    <div class="dropdown">
                    <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" data-display="static">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="chart-wrapper">
                    <div id="mixed-chart-1"></div>
                    </div>
                </div>

                </div>


            </div>
            <div class="col-xl-4">
                <div class="card card-default chat">
                        <div class="card-header">
                            <h2>Selena Wagner</h2>
                            <div class="dropdown dropdown-chat-state">
                                <img style="width: 40px; height:40px; border-radius:50%" src="" alt="">
                            </div>
                        </div>
                        <div class="card-body pb-0"  style="height: 383px;">
                            <div style="overflow: auto; height:380px">

                                <!-- Media Chat Left -->
                                <div class="left_sms">
                                    <p class="l_text">my name is nahif hasan</p>
                                </div>
                                <!-- Media Chat Right -->
                                <div class="right_sms">
                                    <p class="r_text">my name is nahif hasan</p>
                                </div>
                                <!-- Media Chat Left -->
                                <div class="left_sms">
                                    <p class="l_text">my name is nahif hasan</p>
                                </div>
                                <!-- Media Chat Right -->
                                <div class="right_sms">
                                    <p class="r_text">my name is nahif hasan</p>
                                </div>
                                <!-- Media Chat Left -->
                                <div class="left_sms">
                                    <p class="l_text">my name is nahif hasan</p>
                                </div>
                                <!-- Media Chat Right -->
                                <div class="right_sms">
                                    <p class="r_text">my name is nahif hasan</p>
                                </div>
                            </div>
                        </div>
                            <div class="chat-footer">
                                <form>
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
                                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
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
