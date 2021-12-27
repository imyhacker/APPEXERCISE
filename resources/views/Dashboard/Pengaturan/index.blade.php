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
                                <h4>Pengaturan Aplikasi</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('upload')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama Aplikasi</label>
                                                <input type="text" class="form-control" name="nama_aplikasi"
                                                    placeholder="Nama Aplikasi">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" class="form-control" name="alamat"
                                                    placeholder="Alamat">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Link Facebook</label>
                                                <input type="text" class="form-control" name="facebook"
                                                    placeholder="Link Facebook">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Link Instagram</label>
                                                <input type="text" class="form-control" name="instagram"
                                                    placeholder="Link Instagram">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-outline-success btn-block"
                                                    value="Kirim / Update">
                                            </div>
                                        </div>
                                    </div>
                                </form>

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
                                <h4>Pengaturan Aplikasi</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>
                                            {{$pn->nama_aplikasi ?? 'Belum Ada Nama Aplikasi'}}
                                        </h4>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>
                                            {{$pn->email ?? 'Belum Ada Email'}}
                                        </h4>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>
                                            {{$pn->facebook ?? 'Belum Ada Alamat FB'}}
                                        </h4>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>
                                            {{$pn->instagram ?? 'Belum Ada Alamat Instagram'}}
                                        </h4>
                                    </div>
                                </div>

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
