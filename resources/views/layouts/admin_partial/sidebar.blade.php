

<aside class="left-sidebar sidebar-dark" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
    <!-- Aplication Brand -->
    <div class="app-brand">
        <a href="{{ route('pages.home') }}">
            BD
        <span class="brand-name">Cooker</span>
        </a>
    </div>
    <!-- begin sidebar scrollbar -->
    <div class="sidebar-left" data-simplebar style="height: 100%;">
        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">
            <li class="active">
                <a class="sidenav-item-link" href="{{ route('page.dashboard') }}">
                    <i class="mdi mdi-desktop-mac-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="sidenav-item-link" href="{{ route('page.category') }}">
                    <i class="mdi mdi-dlna"></i>
                    <span class="nav-text">Category</span>
                </a>
            </li>
            <li>
                <a class="sidenav-item-link" href="{{ route('page.post') }}">
                    <i class="mdi mdi-package-variant"></i>
                    <span class="nav-text">Post</span>
                </a>
            </li>

            <li class="section-title"> Pages</li>

            <li  class="has-sub" >
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#users"
                aria-expanded="false" aria-controls="users">
                <i class="mdi mdi-face"></i>
                <span class="nav-text">Employe</span> <b class="caret"></b>
            </a>
            <ul  class="collapse"  id="users"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                    <li>
                        <a class="sidenav-item-link" href="{{ route('admin.editor') }}">
                        <span class="nav-text">Add Employe</span>
                        </a>
                    </li>
                    <li>
                        <a class="sidenav-item-link" href="{{ route('admin.editor.activities') }}">
                        <span class="nav-text">Employe Activities</span>
                        </a>
                    </li>
                </div>
            </ul>
            </li>
            <li  class="has-sub" >
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                aria-expanded="false" aria-controls="authentication">
                <i class="mdi mdi-account"></i>
                <span class="nav-text">Admin Authentication</span> <b class="caret"></b>
            </a>
            <ul  class="collapse"  id="authentication"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                    <li>
                        <a class="sidenav-item-link" href="{{ route('admin.change_password') }}">
                        <span class="nav-text">Change Password</span>
                        </a>
                    </li>
                </div>
            </ul>
            </li>
            <li class="section-title">
            Documentation
            </li>
            <li  class="has-sub" >
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#customization"
                aria-expanded="false" aria-controls="customization">
                <i class="mdi mdi-square-edit-outline"></i>
                <span class="nav-text">Customization</span> <b class="caret"></b>
            </a>
            <ul  class="collapse"  id="customization"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                    <li>
                        <a class="sidenav-item-link" href="{{ route('page.web_settings') }}">
                            <i class="mdi mdi-android-debug-bridge"></i>
                            <span class="nav-text"> Web Settings</span>
                        </a>
                    </li>
                </div>
            </ul>
            </li>



        </ul>

    </div>

    <div class="sidebar-footer">
        <div class="sidebar-footer-content">
        <ul class="d-flex">
            <li>
            <a href="{{ route('admin.change_password') }}" data-toggle="tooltip" title="Profile settings"><i class="mdi mdi-settings"></i></a></li>
            <li>
            <a href="{{ route('admin.ticket') }}" data-toggle="tooltip" title="No chat messages"><i class="mdi mdi-chat-processing"></i></a>
            </li>
        </ul>
        </div>
    </div>
    </div>
</aside>
