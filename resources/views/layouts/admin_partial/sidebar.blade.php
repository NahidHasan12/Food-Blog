

<aside class="left-sidebar sidebar-dark" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
    <!-- Aplication Brand -->
    <div class="app-brand">
        <a href="/index.html">
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
                    <i class="mdi mdi-briefcase-account-outline"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="sidenav-item-link" href="{{ route('page.category') }}">
                    <i class="mdi mdi-message-draw"></i>
                    <span class="nav-text">Category</span>
                </a>
            </li>
            <li>
                <a class="sidenav-item-link" href="{{ route('page.post') }}">
                    <i class="mdi mdi-message-draw"></i>
                    <span class="nav-text">All Post</span>
                </a>
            </li>
            <li>
                <a class="sidenav-item-link" href="{{ route('page.web_settings') }}">
                    <i class="mdi mdi-message-draw"></i>
                    <span class="nav-text">Web Settings</span>
                </a>
            </li>
            <li class="section-title"> Pages</li>

            <li  class="has-sub" >
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#users"
                aria-expanded="false" aria-controls="users">
                <i class="mdi mdi-image-filter-none"></i>
                <span class="nav-text">Editor</span> <b class="caret"></b>
            </a>
            <ul  class="collapse"  id="users"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                    <li>
                        <a class="sidenav-item-link" href="{{ route('admin.editor') }}">
                        <span class="nav-text">Add Editor</span>
                        </a>
                    </li>
                    <li>
                        <a class="sidenav-item-link" href="user-activities.html">
                        <span class="nav-text">Editor Activities</span>
                        </a>
                    </li>
                    <li>
                        <a class="sidenav-item-link" href="user-account-settings.html">
                        <span class="nav-text">Editor Account Settings</span>
                        </a>
                    </li>
                </div>
            </ul>
            </li>
            <li  class="has-sub" >
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                aria-expanded="false" aria-controls="authentication">
                <i class="mdi mdi-account"></i>
                <span class="nav-text">Authentication</span> <b class="caret"></b>
            </a>
            <ul  class="collapse"  id="authentication"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                    <li >
                        <a class="sidenav-item-link" href="sign-in.html">
                        <span class="nav-text">Sign In</span>

                        </a>
                    </li>
                    <li>
                        <a class="sidenav-item-link" href="sign-up.html">
                        <span class="nav-text">Sign Up</span>

                        </a>
                    </li>
                    <li>
                        <a class="sidenav-item-link" href="reset-password.html">
                        <span class="nav-text">Reset Password</span>

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
                    <li >
                        <a class="sidenav-item-link" href="navbar-customization.html">
                        <span class="nav-text">Navbar</span>

                        </a>
                    </li>
                    <li>
                        <a class="sidenav-item-link" href="sidebar-customization.html">
                        <span class="nav-text">Sidebar</span>

                        </a>
                    </li>
                    <li>
                        <a class="sidenav-item-link" href="styling.html">
                        <span class="nav-text">Styling</span>

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
            <a href="user-account-settings.html" data-toggle="tooltip" title="Profile settings"><i class="mdi mdi-settings"></i></a></li>
            <li>
            <a href="#" data-toggle="tooltip" title="No chat messages"><i class="mdi mdi-chat-processing"></i></a>
            </li>
        </ul>
        </div>
    </div>
    </div>
</aside>
