<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Artikel<span></span></p>
            <h1 class="text-center mb-5">Daftar Artikel</h1>
        </div>
        <div class="row g-4">
        @foreach($blog as $bb)

            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="rounded overflow-hidden">
                    {{--  --}}
                    <div class="bg-light p-4">
                        <p class="text-primary fw-medium mb-2" style="text-transform: uppercase;">{{$bb->judul}}</p>
                        <i class="fas fa-tag mt-2"></i> Tag : <a href="{{$bb->tag}}">
                        <span class="badge" style="border-radius: 40; background-color: #6222cc">{{$bb->tag}}</span>
                        </a><br>
                        <i class="fas fa-clock mt-2"></i> Uploaded At : 
                        <span class="badge" style="border-radius: 40; background-color: #6222cc">{{$bb->created_at->diffForHumans()}}</span><br>
                        <i class="fas fa-user mt-2"></i> Published By : 
                        <span class="badge" style="border-radius: 40; background-color: #6222cc">{{$bb->uploader}}</span>
                        <br>
                        <a href="{{route('baca', $bb->slug_blog)}}" class="btn btn-outline-primary mt-2">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>

    </div>

</div>
<div class="row">
    <div class="col-md-12 d-flex justify-content-center">
        {{$blog->links()}}

    </div>
</div>