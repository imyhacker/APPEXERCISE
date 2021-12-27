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
                                <h4>Upload Foto Kegiatan</h4>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Upload Foto Baru
                                </button>
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
                                <h4>Foto Foto Kegiatan</h4>
                            </div>
                            <div class="card-body table-responsive">
                               <table class="table" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Tanggal Kegiatan</th>
                                            <th>Uploaded At</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach ($g as $f)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$f->judul}}</td>
                                            <td>{{$f->tanggal}}</td>
                                            <td>{{$f->created_at->diffForHumans()}}</td>
                                            <td>
                                                <a href="{{route('hapus_foto', $f->id)}}" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></a>
                                                <a href="{{route('edit_foto', $f->id)}}" class="btn btn-outline-primary btn-sm"><i class="fas fa-edit"></i></a>
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
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal Upload Foto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('upload_foto')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Foto Kegiatan</label>
                            <input type="file" class="form-control-file" name="foto">
                        </div>
                        <div class="form-group">
                            <label>Judul Kegiatan</label>
                            <input type="text" class="form-control" name="judul" placeholder="Judul Kegiatan">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Kegiatan</label>
                            <input type="date" class="form-control" name="tanggal">
                        </div>
                        <div class="form-group">
                            <label>Kegiatan</label>
                            <textarea name="kegiatan" id="konten" cols="30" rows="10"></textarea>
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
