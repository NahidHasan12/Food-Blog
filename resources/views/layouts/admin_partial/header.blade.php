

<header class="main-header" id="header">
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
        <!-- Sidebar toggle button -->
        <button id="sidebar-toggler" class="sidebar-toggle">
        <span class="sr-only">Toggle navigation</span>
        </button>

        <span class="page-title">dashboard</span>

        <div class="navbar-right ">

        <ul class="nav navbar-nav">

            <!-- User Account -->
            <li class="dropdown user-menu">
            <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                @if (auth()->guard('admin')->check())
                <img height="40" src="{{ asset('backend/admin_img').'/'.auth()->guard('admin')->user()->image }}" class="user-image rounded-circle" alt="{{ auth()->guard('admin')->user()->image }}" />
                @endif
                <span class="d-none d-lg-inline-block">
                    @if (auth()->guard('admin')->check())
                        {{ auth()->guard('admin')->user()->first_name }} {{ auth()->guard('admin')->user()->last_name }}
                    @endif
                </span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
                <li>
                <a class="dropdown-link-item" href="user-profile.html">
                    <i class="mdi mdi-account-outline"></i>
                    <span class="nav-text">My Profile</span>
                </a>
                </li>
                <li>
                <a class="dropdown-link-item" href="{{ route('admin.ticket') }}">
                    <i class="mdi mdi-email-outline"></i>
                    <span class="nav-text">Message</span>
                    <span class="badge badge-pill badge-primary">24</span>
                </a>
                </li>
                <li>
                    <a class="dropdown-link-item" href="{{ route('admin.change_password') }}">
                        <i class="mdi mdi-settings"></i>
                        <span class="nav-text">Account Setting</span>
                    </a>
                </li>

                <li class="dropdown-footer">
                <a class="dropdown-link-item" href="{{ route('admin.logout') }}"> <i class="mdi mdi-logout"></i> Log Out </a>
                </li>
            </ul>
            </li>
        </ul>
        </div>
    </nav>


</header>
