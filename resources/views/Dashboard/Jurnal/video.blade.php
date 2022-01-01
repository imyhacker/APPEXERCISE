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
                                    <div class="col-md-12 mt-3">
                                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                            data-target="#modalArtikel">
                                            Tambah Video
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
                    <div class="col-lg-12">
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
                                            <th>ID Youtube</th>
                                            <th>Tag</th>
                                            <th>Opt</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @php $no = 1; @endphp
                                       @foreach($vide as $vd)
                                       <tr>
                                           <td>{{$no++}}</td>
                                           <td>{{$vd->judul_video}}</td>
                                           <td>{{$vd->id_youtube}}</td>
                                           <td>{{$vd->tag_video}}</td>
                                           <td>
                                               <a href="{{route('hapus_video', $vd->slug_video)}}" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i> Hapus</a>
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
                        <h5 class="modal-title" id="exampleModalLabel">Modal Tambah Vido</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('upload_video')}}" method="POST">
                        @csrf
                    <div class="modal-body">
                        <div class="row">
                           
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>ID Link Youtube</label>
                                    <input type="text" name="id_youtube" class="form-control" name="judul" placeholder="Hanya ID Link Youtube">
                                    <small>https://www.youtube.com/watch?v=<font color="red">UONvpzG7yjo</font></small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Tag</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="tag_video" required>
                                        <option disabled selected value>== Pilih Tag  ==</option>
                                        @foreach($tag as $tag_artikel)
                                        <option value="{{$tag_artikel->tag}}">{{$tag_artikel->tag}}</option>
                                        @endforeach
                                    </select>
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
