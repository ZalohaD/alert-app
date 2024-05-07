
@include('components.head')

<body>
    <div class="container-fluid bg-white p-0">

        {{-- @include('components.spinner') --}}

        @include('components.navbar')

        @yield('content')

        @include('components.footer')

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @include('components.scripts')
</body>

</html>
