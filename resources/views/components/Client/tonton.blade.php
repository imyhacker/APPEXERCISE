<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">

        <div class="row g-4">
            <div class="col-lg-12 col-md-12 first wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">

                    <style>
                        .containerv {
                            position: relative;
                            overflow: hidden;
                            width: 100%;
                            padding-top: 56.25%;
                            /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
                        }

                        /* Then style the iframe to fit in the container div with full height and width */
                        .responsive-iframe {
                            position: absolute;
                            top: 0;
                            left: 0;
                            bottom: 0;
                            right: 0;
                            width: 100%;
                            height: 100%;
                        }

                    </style>
                    <div class="col-sm-12">
                        <div class="containerv">
                            <iframe class="responsive-iframe"
                                src="https://www.youtube.com/embed/{{$data->id_youtube}}"></iframe>
                        </div>
                    </div>

                    <div class="col-md-12 mt-3">
                        <div id="disqus_thread" class="mt-10"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
