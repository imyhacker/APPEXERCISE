<x-dcore.head />
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <x-dcore.nav />
        <x-dcore.sidebar />
        <div class="main-content">
            <section class="section">

                <!-- MAIN OF CENTER CONTENT -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Setup</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                            data-target="#modalArtikel">
                                            Tambah Artikel
                                        </button>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <button type="button" class="btn btn-danger btn-block" data-toggle="modal"
                                            data-target="#modalTag">
                                            Tambah Tag
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END OF CENTER CONTENT -->


            </section>
            <section class="section">

                <!-- MAIN OF CENTER CONTENT -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Blog</h4>
                            </div>
                            <div class="card-body table-responsive">
                            <table class="table" id="table_kehadiran">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Tag</th>
                                            <th>Opt</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no_ = 1; @endphp
                                        @foreach($blog as $b)
                                            <tr>
                                                <td>{{$no_++}}</td>
                                                <td>{{$b->judul}}</td>
                                                <td>{{$b->tag}}</td>
                                                <td>
                                                    <a href="{{route('hapus_blog', $b->slug_blog)}}" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></a>
                                                    <a href="{{route('edit_blog', $b->slug_blog)}}" class="btn btn-outline-primary btn-sm"><i class="fas fa-edit"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tag</h4>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tag</th>
                                            <th>Opt</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach($tag as $tag_info)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{Str::limit($tag_info->tag, '5', '...')}}</td>
                                            <td>
                                                <a href="{{route('hapus_tag', $tag_info->slug_tag)}}" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF CENTER CONTENT -->


            </section>
        </div>



        <div class="modal fade" id="modalArtikel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal Tambah Artikel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('upload_blog')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Gambar Artikel</label>
                                    <input type="file" class="form-control-file" name="gambar">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Judul Artikel</label>
                                    <input type="text" class="form-control" name="judul" placeholder="Judul Artikel">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Tag</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="tag">
                                        <option disabled selected value>== Pilih Tag  ==</option>
                                        @foreach($tag as $tag_artikel)
                                        <option>{{$tag_artikel->tag}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                <textarea id="konten" class="form-control" name="isi" rows="10" cols="50"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
                </div>
            </div>
        </div>



        <div class="modal fade" id="modalTag" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal Tambah Tag</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('upload_tag')}}" method="POST">
                        @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Masukan Tag</label>
                                    <input type="text" class="form-control" name="tag">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>







        <x-dcore.footer />
    </div>
</div>
<x-dcore.script />
