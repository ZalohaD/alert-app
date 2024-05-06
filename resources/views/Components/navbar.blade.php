<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
        <h1 class="m-0 text-primary">Alert</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link{{ Request::is('/') ? ' active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link{{ Request::is('about') ? ' active' : '' }}">About</a>
            <div class="nav-item dropdown">
                <a href="{{ route('jobs') }}" class="nav-link dropdown-toggle">Jobs</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{ route('jobs') }}" class="dropdown-item">All Jobs</a>
                    <a href="{{ route('categories') }}" class="dropdown-item">Categories</a>
                    <a href="#" class="dropdown-item">Companies</a>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
        </div>
        <a href="{{ route('auth.login') }}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->