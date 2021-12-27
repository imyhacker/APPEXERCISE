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
                  <h4>Edit Foto</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('update_foto', $gambar->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Foto Kegiatan</label>
                            <input type="file" class="form-control-file" name="foto">
                        </div>
                        <div class="form-group">
                            <label>Judul Kegiatan</label>
                            <input type="text" class="form-control" name="judul" placeholder="Judul Kegiatan" value="{{$gambar->judul}}">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Kegiatan</label>
                            <input type="date" class="form-control" name="tanggal" value="{{$gambar->tanggal}}">
                        </div>
                        <div class="form-group">
                            <label>Kegiatan</label>
                            <textarea name="kegiatan" id="konten" cols="30" rows="10">{!! $gambar->kegiatan !!}</textarea>
                        </div>
                   
                        <button type="submit" class="btn btn-primary btn-block">Save changes</button>
                </div>
              </div>
            </div>
            
          </div>
        <!-- END OF CENTER CONTENT -->


        </section>
      </div>
      <x-dcore.footer />
    </div>
  </div>
<x-dcore.script />