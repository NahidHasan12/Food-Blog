<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Admin Panel-  @yield('title')</title>

  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="{{ asset('/backend') }}/plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="{{ asset('/backend') }}/plugins/simplebar/simplebar.css" rel="stylesheet" />

  <link href="{{ asset('/backend') }}/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="{{ asset('/backend') }}/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" />

  <link href="{{ asset('/backend') }}/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="{{ asset('/backend') }}/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/backend') }}/path/to/font-awesome/css/font-awesome.min.css">


  <link id="main-css-href" rel="stylesheet" href="{{ asset('/backend') }}/css/style.css" />
  <link href="{{ asset('/backend') }}/images/favicon.png" rel="shortcut icon" />
  {{-- select2 --}}
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  {{-- drofify link --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  {{-- summernote link --}}
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>


  <body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>


    <div id="toaster"></div>

    <div class="wrapper">
        @include('layouts.editor_partial.sidebar')

        <div class="page-wrapper">

            @include('layouts.editor_partial.header')


            @yield('content')

        </div>

    </div>

    <div class="card card-offcanvas" id="contact-off" >
        <div class="card-header">
        <h2>Contacts</h2>
        <a href="#" class="btn btn-primary btn-pill px-4">Add New</a>
        </div>
        <div class="card-body">

        <div class="mb-4">
            <input type="text" class="form-control form-control-lg form-control-secondary rounded-0" placeholder="Search contacts...">
        </div>

        <div class="media media-sm">
            <div class="media-sm-wrapper">
            <a href="user-profile.html">
                <img src="images/user/user-sm-01.jpg" alt="User Image">
                <span class="active bg-primary"></span>
            </a>
            </div>
            <div class="media-body">
            <a href="user-profile.html">
                <span class="title">Selena Wagner</span>
                <span class="discribe">Designer</span>
            </a>
            </div>
        </div>

        <div class="media media-sm">
            <div class="media-sm-wrapper">
            <a href="user-profile.html">
                <img src="images/user/user-sm-02.jpg" alt="User Image">
                <span class="active bg-primary"></span>
            </a>
            </div>
            <div class="media-body">
            <a href="user-profile.html">
                <span class="title">Walter Reuter</span>
                <span>Developer</span>
            </a>
            </div>
        </div>

        <div class="media media-sm">
            <div class="media-sm-wrapper">
            <a href="user-profile.html">
                <img src="images/user/user-sm-03.jpg" alt="User Image">
            </a>
            </div>
            <div class="media-body">
            <a href="user-profile.html">
                <span class="title">Larissa Gebhardt</span>
                <span>Cyber Punk</span>
            </a>
            </div>
        </div>

        <div class="media media-sm">
            <div class="media-sm-wrapper">
            <a href="user-profile.html">
                <img src="images/user/user-sm-04.jpg" alt="User Image">
            </a>

            </div>
            <div class="media-body">
            <a href="user-profile.html">
                <span class="title">Albrecht Straub</span>
                <span>Photographer</span>
            </a>
            </div>
        </div>

        <div class="media media-sm">
            <div class="media-sm-wrapper">
            <a href="user-profile.html">
                <img src="images/user/user-sm-05.jpg" alt="User Image">
                <span class="active bg-danger"></span>
            </a>
            </div>
            <div class="media-body">
            <a href="user-profile.html">
                <span class="title">Leopold Ebert</span>
                <span>Fashion Designer</span>
            </a>
            </div>
        </div>

        <div class="media media-sm">
            <div class="media-sm-wrapper">
            <a href="user-profile.html">
                <img src="images/user/user-sm-06.jpg" alt="User Image">
                <span class="active bg-primary"></span>
            </a>
            </div>
            <div class="media-body">
            <a href="user-profile.html">
                <span class="title">Selena Wagner</span>
                <span>Photographer</span>
            </a>
            </div>
        </div>

        </div>
    </div>




    <script src="{{ asset('/backend') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('/backend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/backend') }}/plugins/simplebar/simplebar.min.js"></script>
    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>
    <script src="{{ asset('/backend') }}/plugins/apexcharts/apexcharts.js"></script>
    <script src="{{ asset('/backend') }}/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/backend') }}/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="{{ asset('/backend') }}/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
    <script src="{{ asset('/backend') }}/plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>
    <script src="{{ asset('/backend') }}/plugins/daterangepicker/moment.min.js"></script>
    <script src="{{ asset('/backend') }}/plugins/daterangepicker/daterangepicker.js"></script>




    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="{{ asset('/backend') }}/js/mono.js"></script>
    <script src="{{ asset('/backend') }}/js/chart.js"></script>
    <script src="{{ asset('/backend') }}/js/map.js"></script>
    <script src="{{ asset('/backend') }}/js/custom.js"></script>
    <script src="{{ asset('/backend') }}/plugins/nprogress/nprogress.js"></script>

    {{-- Dropify link --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- Dropify script --}}
    <script>
        $('.dropify').dropify();
    </script>

    {{-- summer note js link --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        // summernote run code
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>

    {{-- select2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @stack('script')
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>

  </body>
</html>
