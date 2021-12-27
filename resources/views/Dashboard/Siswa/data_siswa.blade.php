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
                                <h4>Data Siswa</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                                data-target="#tambahAkun">
                                                <i class="fas fa-plus"></i> Tambah Akun
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                                data-target="#uploadAkun">
                                                <i class="fas fa-upload"></i> Upload Akun
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-12 table-responsive">
                                        <table class="table" id="table_id">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Kelas</th>
                                                    <th>Jabatan</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach($siswa as $sis)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$sis->name}}</td>
                                                    <td>{{$sis->email}}</td>
                                                    <td style="text-transform: uppercase;">{{$sis->kelas}}{{$sis->tipe_kelas}}</td>
                                                    <td style="text-transform: capitalize;">{{$sis->role2}}</td>
                                                    <td>
                                                        <a href="{{route('hapus_siswa', $sis->id)}}" class="btn btn-outline-danger"><i class="fas fa-trash"></i> Hapus</a>
                                                        <a href="{{route('edit_siswa', $sis->id)}}" class="btn btn-outline-success"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END OF CENTER CONTENT -->


            </section>
        </div>

        <div class="modal fade" id="tambahAkun" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Akun Siswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('tambah_siswa')}}" method="POST">
                        @csrf
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama</label>
                                <input type="text" class="form-control" placeholder="Nama" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email</label>
                                <input type="email" class="form-control" placeholder="name@example.com" name="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Kelas</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="kelas">
                                            <option disabled selected value>== Pilih Kelas ==</option>
                                            <option value="x">X</option>
                                            <option value="xi">XI</option>
                                            <option value="xii">XII</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Tipe Kelas</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="tipe_kelas">
                                            <option disabled selected value>== Pilih Tipe ==</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Jabatan</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="role2">
                                    <option disabled selected value>== Pilih Jabatan ==</option>
                                    <option value="anggota">Anggota</option>
                                    <option value="ketua">Ketua</option>
                                    <option value="wakil">Wakil Ketua</option>
                                    <option value="bendahara">Bendahara</option>
                                    <option value="sekertaris">Sekertaris</option>
                                </select>
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
        <div class="modal fade" id="uploadAkun" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Upload Excel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('upload_siswa')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="modal-body">
                    <div class="form-group">
                        <input type="file" class="form-control-file" allow=".xsl,.xlsx" name="excel">
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
