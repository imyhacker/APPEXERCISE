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
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Keuangan</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                            data-target="#pemasukan">
                                            <i class="fas fa-arrow-down"></i> Pemasukan
                                        </button>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <button type="button" class="btn btn-danger btn-block" data-toggle="modal"
                                            data-target="#pengeluaran">
                                            <i class="fas fa-arrow-up"></i> Pengeluaran
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Total Uang</h4>
                            </div>
                            <div class="card-body text-lg">
                               <h4> Rp. {{number_format($total_uang - $total_pengeluaran, '2')}},-</h4>
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
                                <h4>Pemasukan</h4>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table" id="table_id">
                                    <thead>
                                      <tr>
                                        <th>No</th>
                                        <th>Nama Pengisi</th>
                                        <th>Jumlah Pemasukan (Rp)</th>
                                        <th>Tanggal Pemasukan</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @php $no = 1; @endphp
                                      @foreach($pem as $pm)
                                      <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$pm->name}}</td>
                                        <td>Rp. {{number_format($pm->pemasukan)}},-</td>
                                        <td>{{$pm->created_at->format('l, d F Y')}}</td>
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
                                <h4>Pengeluaran</h4>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table" id="table_kehadiran">
                                    <thead>
                                      <tr>
                                        <th>No</th>
                                        <th>Nama Pengisi</th>
                                        <th>Jumlah Pengeluaran (Rp)</th>
                                        <th>Untuk</th>
                                        <th>Tujuan</th>
                                        <th>Tanggal Pengeluaran</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @php $no = 1; @endphp
                                      @foreach($peng as $pg)
                                      <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$pg->name}}</td>
                                        <td>Rp. {{number_format($pg->pengeluaran)}},-</td>
                                        <td>{{$pg->untuk}}</td>
                                        <td>{{Str::limit($pg->tujuan, 100, '...')}}</td>
                                        <td>{{$pg->created_at->format('l, d F Y')}}</td>
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
        <div class="modal fade" id="pemasukan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal Pemasukan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('tambah_pemasukan')}}" method="POST">
                      @csrf
                    <div class="modal-body">
                        <div class="form-group">
                          <label>Total Pemasukan (Rp)</label>
                            <input type="number" class="form-control" placeholder="Ex: 12000" name="pemasukan">
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
        <div class="modal fade" id="pengeluaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal Pengeluaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('tambah_pengeluaran')}}" method="POST">
                      @csrf
                    <div class="modal-body">
                        <div class="form-group">
                          <label>Total Pengeluaran (Rp)</label>
                            <input type="number" class="form-control" placeholder="Ex: 12000" name="pengeluaran">
                        </div>
                        <div class="form-group">
                        <label>Untuk</label>
                            <input type="text" class="form-control" placeholder="Ex: Membeli NodeMCU" name="untuk">
                        </div>
                        <div class="form-group">
                          <label>Tujuan</label>
                          <textarea name="tujuan" class="form-control" cols="30" rows="10" placeholder="Deskripsi"></textarea>
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
