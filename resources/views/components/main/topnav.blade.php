<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-start ml-0">
                <div class="h2 text-white d-inline-block mb-0">Welcome! {{ $user->name ?? "Admin" }}</div>
            </ul>
            <ul class="navbar-nav align-items-center ml-auto ml-md-auto">
                <li class="nav-item">
                    <a class="nav-link pr-0" href="{{ route("logout") }}" role="button">
                        <button class="btn btn-danger btn-md media align-items-center">
                            <div class="media-body ml-2 d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold">Logout</span>
                            </div>
                            <i class="fas fa-sign-out-alt text-secondary" style="top: 0 !important;"></i>
                        </button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
