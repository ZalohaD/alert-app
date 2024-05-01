<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
        <h1 class="m-0 text-primary">{{ __('JobEntry') }}</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link{{ Request::is('/') ? ' active' : '' }}">{{ __('Home') }}</a>
            <a href="{{ route('about') }}" class="nav-item nav-link{{ Request::is('about') ? ' active' : '' }}">{{ __('About') }}</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('Jobs') }}</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{ route('job.list') }}" class="dropdown-item">{{ __('Job List') }}</a>
                    <a href="{{ route('job.detail') }}" class="dropdown-item">{{ __('Job Detail') }}</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('Pages') }}</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{ route('category') }}" class="dropdown-item">{{ __('Job Category') }}</a>
                    <a href="{{ route('testimonial') }}" class="dropdown-item">{{ __('Testimonial') }}</a>
                    <a href="{{ route('404') }}" class="dropdown-item">404</a>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="nav-item nav-link">{{ __('Contact') }}</a>
        </div>
        <a href="{{ route('job.post') }}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">{{ __('Post A Job') }}<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>

{{$slot}}
