<div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5 mt-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3">
                <p class="section-title text-white h5 mb-4">Alamat Kami<span></span></p>
                <p><i class="fa fa-map-marker-alt me-3"></i>{{$pengaturan->alamat ?? 'Belum Ada Alamat'}}</p>
                <p><i class="fa fa-envelope me-3"></i>{{$pengaturan->email  ?? 'Belum Ada Email'}}</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="{{$pengaturan->facebook ?? ''}}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="{{$pengaturan->instagram ?? ''}}"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="section-title text-white h5 mb-4">Link Cepat<span></span></p>
                <a class="btn btn-link" href="{{url('/about')}}">About Us</a>
                <a class="btn btn-link" href="{{url('/blog')}}">Blog</a>
                <a class="btn btn-link" href="{{url('/gallery')}}">Galery</a>
                <a class="btn btn-link" href="{{url('/contact')}}">Contact</a>
            </div>
            
            <div class="col-md-6 col-lg-6">
                <p class="section-title text-white h5 mb-4">Kritik Dan Saran<span></span></p>
                <p>Jika Ada Pertanyaan Atau Saran Untuk Kami Silahkan Hubungi Kami.</p>
                <a href="{{url('/contact')}}" class="btn btn-outline-warning btn-lg btn-block rounded-pill">Hubungi Kami</a>
            </div>
        </div>
    </div>
    <div class="container px-lg-5">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Exercise Telematika</a>, All Right Reserved. 
                    
                    Designed With <font color="red">♥</font> By <a class="border-bottom" href="https://ariikun.surge.sh">Ariikun</a><br><br>
                  
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="{{url('/')}}">Home</a>
                        <a href="{{url('/about')}}">About</a>
                        <a href="{{url('/blog')}}">Blog</a>
                        <a href="{{url('/gallery')}}">Galery</a>
                        <a href="{{url('/contact')}}">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>