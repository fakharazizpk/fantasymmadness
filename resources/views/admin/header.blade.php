<nav class="navbar navbar-light bg-light navbar-expand-lg fixed-top">
    <div class="container-md">
        <a href="#" class="navbar-brand">
            <img src="{{ asset('assets/logo.png') }}" width="50px" height="40px" alt="Avatar" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="navbar-item"><a href="#" class="nav-link">Admin</a></li>
                <li class="navbar-item"><a href="#" class="nav-link">Blog</a></li>
                <li class="navbar-item"><a href="#" class="nav-link">About Me</a></li>
                <li>
                    <div class="dropdown">
                        <img src="{{ asset('assets/Profile-Avatar-PNG.png') }}" width="40px" height="40px" alt="Avatar" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#"><i class="fa-regular fa-user"></i> Profile</a></li>
                          <li><a class="dropdown-item" href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
                        </ul>
                      </div>
                </li>
            </ul>
        </div> <!-- navbarCollapse -->
    </div> <!-- wrapper -->
</nav>
