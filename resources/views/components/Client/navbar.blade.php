<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="m-0">{{config('app.name')}}</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="{{url('/')}}" class="nav-item nav-link">Home</a>
                <a href="{{url('/about')}}" class="nav-item nav-link">About</a>
                <a href="{{url('/blog')}}" class="nav-item nav-link">Blog</a>
                <a href="{{url('/gallery')}}" class="nav-item nav-link">Gallery</a>
                <a href="{{url('/contact')}}" class="nav-item nav-link">Contact</a>
                @auth
                <a href="{{url('/home')}}" class="nav-item nav-link">Dashboard</a>
            @endauth
            @guest
            <a href="{{url('/login')}}" class="nav-item nav-link">Sign In</a>

            @endguest
            </div>
            @auth
            <a href="{{url('home')}}" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Home</a>
            @endauth
            @guest
            <a href="{{url('login')}}" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Login</a>

            @endguest
        </div>
    </nav>

    <div class="container-xxl bg-primary hero-header">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated slideInDown">{{config('app.name')}}</h1>
                    <p class="text-white pb-3 animated slideInDown">Exercise adalah salahsatu Ekstrakulikuler yang berada di SMK Telematika Indramayu, yang berfokuskan pada dunia komputer, IoT, Desain Grafis, Dan Programming.</p>
                    <a href="{{url('/about')}}" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Penasaran ?</a>
                    <a href="{{url('/contact')}}" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Ingin Bergabung ?</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid animated zoomIn" src="{{asset('assets/img/hero.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>