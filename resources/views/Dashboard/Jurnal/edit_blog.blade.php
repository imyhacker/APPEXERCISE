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
                  <h4>Edit Artikel <i>"{{$data->judul}}"</i></h4>
                </div>
                <div class="card-body">
                <form action="{{route('update_blog', $data->slug_blog)}}" method="POST" enctype="multipart/form-data">
                        @csrf
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
                                    <input type="text" class="form-control" name="judul" placeholder="Judul Artikel" value="{{$data->judul}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Tag</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="tag">
                                        <option disabled selected value>== Pilih Tag  ==</option>
                                        @foreach($tag as $tag_artikel)
                                        <option @if($tag_artikel->tag == $data->tag) selected @endif>{{$tag_artikel->tag}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                <textarea id="konten" class="form-control" name="isi" rows="10" cols="50">{!! $data->isi !!}</textarea>
                                </div>
                            </div>
                        </div>
                    
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                    
                </form>
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