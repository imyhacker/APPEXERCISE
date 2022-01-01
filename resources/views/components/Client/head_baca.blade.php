
<head>
    <meta charset="utf-8">
 
<!-- Primary Meta Tags -->
<title>Exercise SMK Telematika Indramayu | {{$data->judul}}</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

<meta name="title" content="Exercise SMK Telematika Indramayu | {{$data->judul}}">
<meta name="description" content="{{Str::limit($data->isi, 160, '...')}}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://exercise.smktelematikaindramayu.sch.id/blog/{{$data->slug_blog}}/baca">
<meta property="og:title" content="Exercise SMK Telematika Indramayu | {{$data->judul}}">
<meta property="og:description" content="{{Str::limit($data->isi, 160, '...')}}">
<meta property="og:image" content="{{asset('gambar/'.$data->gambar)}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://exercise.smktelematikaindramayu.sch.id/blog/{{$data->slug_blog}}/baca">
<meta property="twitter:title" content="Exercise SMK Telematika Indramayu | {{$data->judul}}">
<meta property="twitter:description" content="{{Str::limit($data->isi, 160, '...')}}">
<meta property="twitter:image" content="{{asset('gambar/'.$data->gambar)}}">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>