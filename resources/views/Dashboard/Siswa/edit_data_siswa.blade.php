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
                                <form action="{{route('update_siswa', $data->id)}}" method="POST">
                                    @csrf

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nama</label>
                                            <input type="text" class="form-control" placeholder="Nama" name="name" value="{{$data->name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Email</label>
                                            <input type="email" class="form-control" placeholder="name@example.com"
                                                name="email" value="{{$data->email}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Password</label>
                                            <input type="password" class="form-control" placeholder="Password"
                                                name="password">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Kelas</label>
                                                    <select class="form-control" id="exampleFormControlSelect1"
                                                        name="kelas">
                                                        <option disabled selected value>== Pilih Kelas ==</option>
                                                        <option value="x" @if($data->kelas == 'x') selected @endif>X</option>
                                                        <option value="xi" @if($data->kelas == 'xi') selected @endif>XI</option>
                                                        <option value="xii" @if($data->kelas == 'xii') selected @endif>XII</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Tipe Kelas</label>
                                                    <select class="form-control" id="exampleFormControlSelect1"
                                                        name="tipe_kelas">
                                                        <option disabled selected value>== Pilih Tipe ==</option>
                                                        <option value="A" @if($data->tipe_kelas == 'A') selected @endif>A</option>
                                                        <option value="B" @if($data->tipe_kelas == 'B') selected @endif>B</option>
                                                        <option value="C" @if($data->tipe_kelas == 'C') selected @endif>C</option>
                                                        <option value="D" @if($data->tipe_kelas == 'D') selected @endif>D</option>
                                                        <option value="E" @if($data->tipe_kelas == 'E') selected @endif>E</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Jabatan</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="role2">
                                                <option disabled selected value>== Pilih Jabatan ==</option>
                                                <option value="anggota" @if($data->role2 == 'anggota') selected @endif>Anggota</option>
                                                <option value="ketua" @if($data->role2 == 'ketua') selected @endif>Ketua</option>
                                                <option value="wakil" @if($data->role2 == 'wakil') selected @endif>Wakil Ketua</option>
                                                <option value="bendahara" @if($data->role2 == 'bendahara') selected @endif>Bendahara</option>
                                                <option value="sekertaris" @if($data->role2 == 'sekertaris') selected @endif>Sekertaris</option>
                                            </select>
                                        </div>

                                    
                                        <button type="submit" class="btn btn-primary btn-block">Save changes</button>
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
