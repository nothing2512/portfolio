<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="{{ route("dashboard") }}">
                <h1 class="bold text-primary">Portfolio Admin</h1>
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link {{ $tab == TAB_DASHBOARD ? 'active' : '' }}" href="{{ route("dashboard") }}">
                            <i class="ni ni-spaceship text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ $tab == TAB_SKILL ? 'active' : '' }}" href="{{ route("skills") }}">
                            <i class="ni ni-bullet-list-67 text-danger"></i>
                            <span class="nav-link-text">Skills</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ $tab == TAB_SPECIALIZATION ? 'active' : '' }}" href="{{ route("specializations") }}">
                            <i class="ni ni-hat-3 text-success"></i>
                            <span class="nav-link-text">Specializations</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ $tab == TAB_PROJECT ? 'active' : '' }}" href="{{ route("projects") }}">
                            <i class="ni ni-app text-warning"></i>
                            <span class="nav-link-text">Projects</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ $tab == TAB_PROFILE ? 'active' : '' }}" href="{{ route("profile") }}">
                            <i class="ni ni-single-02 text-info"></i>
                            <span class="nav-link-text">Profile</span>
                        </a>
                    </li>

                </ul>

                <hr class="my-3"/>

                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("home") }}" target="_blank">
                            <i class="ni ni-world-2"></i>
                            <span class="nav-link-text">See Website</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
