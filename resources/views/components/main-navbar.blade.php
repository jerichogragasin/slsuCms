<div class="d-flex text-center flex-column mt-4">
    <a href="{{ url('/') }}"><img src={{ asset('images/banner.png') }} alt="" height="100px" class="mx-auto mb-2"></a>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent mx-auto flex-nowrap">
        <div class="navbar-expand" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item fs-5 nav-link px-2" href={{ url('/') }}>Home</a>
                <a class="nav-item fs-5 nav-link px-2" href="#documentation">Documentation</a>
                <a class="nav-item fs-5 nav-link px-2" href="#">Campus</a>
                <a href="{{ route('login') }}" class="fs-5 nav-link text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
            </div>
        </div>
    </nav>
</div>