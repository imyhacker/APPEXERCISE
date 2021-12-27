<div class="container py-5">
        <div class="row">
            @foreach($galeri as $gl)
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <img class="card-img-top"
                        src="{{asset('foto/'.$gl->foto)}}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{$gl->judul}}</h4>
                        <p class="card-text">{{Carbon\Carbon::parse($gl->tanggal)->format('l, d F Y')}}</p>
                        
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-12 d-flex justify-content-center">
                {{$galeri->links()}}
            </div>
        </div>
</div>
