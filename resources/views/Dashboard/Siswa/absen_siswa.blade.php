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
                                <h4>Absen Siswa</h4>
                            </div>
                            <div class="card-body table-responsive">


                                <table class="table" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Reset Kehadiran</th>
                                            <th>Kehadiran</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach($semua as $t )
                                        <tr>

                                            <form action="{{route('upload_absen')}}" method="POST">
                                                @csrf
                                                <td>{{$no++}}</td>
                                                <td>
                                                    {{$t->name}}
                                                    <input type="hidden" name="nama" class="form-control"
                                                        value="{{$t->name}}" readonly></td>
                                                        <td style="text-transform: uppercase;">
                                                    {{$t->kelas}}{{$t->tipe_kelas}}
                                                    <input type="hidden" name="kelas" class="form-control"
                                                        value="{{$t->kelas}}{{$t->tipe_kelas}}" readonly></td>
                                                <td>
                                                    
                                                    <a href="{{route('reset', $t->name)}}" class="btn btn-outline-danger btn-sm btn-block"><i
                                                            class="fas fa-reset"></i> Reset </a>
                                                </td>
                                                <td>

                                                    <input type="submit" name="kehadiran"
                                                        class="btn btn-outline-success btn-sm" value="HADIR">
                                                    <input type="submit" name="kehadiran"
                                                        class="btn btn-outline-danger btn-sm" value="ALFA"> <input
                                                        type="submit" name="kehadiran"
                                                        class="btn btn-outline-warning btn-sm" value="IZIN">
                                                    <input type="submit" name="kehadiran"
                                                        class="btn btn-outline-primary btn-sm" value="SAKIT">
                                                </td>

                                            </form>
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
            <section class="section">

                <!-- MAIN OF CENTER CONTENT -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Absen Keseluruhan</h4>
                            </div>
                            <div class="card-body">


                                <table class="table" id="table_kehadiran">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Kehadiran</th>
                                            <th>Tanggal</th>

                                        </tr>
                                    </thead>
                                  <tbody>
                                      @php $no_ = 1; @endphp
                                      @foreach($semua1 as $sm)
                                      <tr>
                                        <td>{{$no_++}}</td>
                                        <td>{{$sm->nama}}</td>
                                        <td style="text-transform: uppercase;">{{$sm->kelas}}</td>
                                        <td>{{$sm->kehadiran}}</td>
                                        <td>{{$sm->created_at->format('l, d F Y')}}</td>
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
        
        <x-dcore.footer />
    </div>
</div>
<x-dcore.script />
