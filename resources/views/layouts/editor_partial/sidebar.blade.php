

<aside class="left-sidebar sidebar-dark" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">

        <div class="app-brand">
            <a href="{{ route('pages.home') }}">
                BD
            <span class="brand-name">Cooker</span>
            </a>
        </div>

        <div class="sidebar-left" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="active">
                    <a class="sidenav-item-link" href="{{ route('editor.dashboard') }}">
                        <i class="mdi mdi-desktop-mac-dashboard"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="sidenav-item-link" href="{{ route('editor.category') }}">
                        <i class="mdi mdi-dlna"></i>
                        <span class="nav-text">Category</span>
                    </a>
                </li>
                <li>
                    <a class="sidenav-item-link" href="">
                        <i class="mdi mdi-package-variant"></i>
                        <span class="nav-text">Post</span>
                    </a>
                </li>



            </ul>

        </div>
    </div>
</aside>
