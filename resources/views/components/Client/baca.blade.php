<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        
        <div class="row g-4">
            <div class="col-lg-8 col-md-12 first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-md-12 d-flex justify-content-center mb-3">
                            <img src="{{asset('gambar/'.$data->gambar)}}" class="img-fluid shadow-sm" style="border-radius: 5px" alt="">
                    </div>
                    <div class="col-md-12 mt-5">
                       <p class="text-justify" style="text-align: justify"> {!! $data->isi !!}</p>
                    </div>
                    <div class="col-md-12 mb-5">
                        <div id="disqus_thread" class="mt-10"></div>
                    </div>
               
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">

                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center">
                            <h4>Tag</h4>
                        </div>
                        <div class="rounded overflow-hidden">
                            <ul class="list-group list-group-flush">
                                @foreach($tag as $tg)
                                <li class="list-group-item"><span class="badge" style="border-radius: 40; background-color: #6222cc">{{$tg->tag}}</span></li>
                               @endforeach
                              </ul>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="d-flex justify-content-center">
                            <h4>Artikel Terbaru</h4>
                        </div>
                        <div class="rounded overflow-hidden">
                            <ul class="list-group list-group-flush">
                                @foreach($terbaru as $trb)
                                <li class="list-group-item">
                                    <a href="{{route('baca', $trb->slug_blog)}}">
                                    <span class="badge" style="border-radius: 40; background-color: #6e0688">{{Str::limit($trb->judul, 40, '...')}}</span>
                                </a>
                                </li>
                                @endforeach
                              </ul>
                        </div>
                        
                    </div>

                    <div class="col-md-12 mt-4">
                        <div class="d-flex justify-content-center">
                            <h4>Artikel Acak</h4>
                        </div>
                        <div class="rounded overflow-hidden">
                            <ul class="list-group list-group-flush">
                                @foreach($acak as $ack)
                                <li class="list-group-item">
                                    <a href="{{route('baca', $ack->slug_blog)}}">
                                    <span class="badge" style="border-radius: 40; background-color: #490688">{{Str::limit($ack->judul, 40, '...')}}</span>
                                </a>
                                </li>
                                @endforeach
                              </ul>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</div>