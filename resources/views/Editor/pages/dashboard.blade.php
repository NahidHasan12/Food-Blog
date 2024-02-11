@extends('layouts.editor')
@section("title","Editor Dashboard")

@section('content')

<div class="content-wrapper">
    <div class="content">
            <div class="row">
                <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini">
                    <div class="card-header">
                    <h2>$18,699</h2>
                    <div class="dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="sub-title">
                        <span class="mr-1">Sales of this year</span> |
                        <span class="mx-1">45%</span>
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
                    <h2>$14,500</h2>
                    <div class="dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="sub-title">
                        <span class="mr-1">Expense of this year</span> |
                        <span class="mx-1">50%</span>
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
                    <div class="dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
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
                <div class="card card-default card-mini">
                    <div class="card-header">
                    <h2>$20,199</h2>
                    <div class="dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="sub-title">
                        <span class="mr-1">Revenue of this year</span> |
                        <span class="mx-1">35%</span>
                        <i class="mdi mdi-arrow-up-bold text-success"></i>
                    </div>
                    </div>
                    <div class="card-body">
                    <div class="chart-wrapper">
                        <div>
                        <div id="spline-area-4"></div>
                        </div>
                    </div>
                    </div>
                </div>
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
                <button class="dropdown-toggle btn btn-primary btn-rounded-circle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                    <i class="mdi mdi-account-alert"></i>
                </button>
                </div>
            </div>
            <div class="card-body pb-0" data-simplebar style="height: 363px;">
                <!-- Media Chat Left -->
                <div class="media media-chat">
                <img src="images/user/user-sm-01.jpg" class="rounded-circle" alt="Avata Image">
                <div class="media-body">
                    <div class="text-content">
                    <span class="message">Hello my name is anna.</span>
                    <time class="time">5 mins ago</time>
                    </div>
                </div>
                </div>

                <!-- Media Chat Right -->
                <div class="media media-chat media-chat-right">
                <div class="media-body">
                    <div class="text-content">
                    <span class="message">Hello i am Riman.</span>
                    <time class="time">4 mins ago</time>
                    </div>
                    <div class="text-content">
                    <span class="message">I want to know about yourself</span>
                    <time class="time">3 mins ago</time>
                    </div>
                </div>
                <img src="images/user/user-sm-02.jpg" class="rounded-circle" alt="Avata Image">
                </div>

                <!-- Media Chat Left -->
                <div class="media media-chat">
                <img src="images/user/user-sm-01.jpg" class="rounded-circle" alt="Avata Image">
                <div class="media-body">
                    <div class="text-content">
                    <span class="message">Its had resolving otherwise she contented therefore.</span>
                    <time class="time">1 mins ago</time>
                    </div>
                </div>
                </div>
            </div>
            <div class="chat-footer">
                <form>
                    <div class="input-group input-group-chat">
                        <div class="input-group-prepend">
                        <span class="emoticon-icon mdi mdi-emoticon-happy-outline"></span>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
</div>

@endsection
