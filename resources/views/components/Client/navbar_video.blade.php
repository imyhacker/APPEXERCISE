<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{url('/')}}" class="navbar-brand p-0">
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
                <a href="{{url('/video')}}" class="nav-item nav-link">Video</a>
                <a href="{{url('/gallery')}}" class="nav-item nav-link">Galery</a>
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

    <div class="container-xxl py-5 bg-primary hero-header">
        <div class="container my-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated slideInDown" style="text-transform: uppercase">{{$data->judul_video}}</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">{{$data->tag_video}}</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>