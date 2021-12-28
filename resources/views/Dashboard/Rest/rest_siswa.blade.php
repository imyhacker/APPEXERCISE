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
                                <h4>Rest Data Siswa</h4>
                            </div>
                            <div class="card-body table-responsive">
                                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">Key</div>
                                  </div>
                                  <input type="text" class="form-control" id="inlineFormInputGroupUsername" value="bc47001fe24b404be7c37ef886520d8bcd487e3f19ddc05d3fae51516ad2d669" readonly>
                                </div>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>For</th>
                                            <th>Method</th>
                                            <th>Endpoint</th>
                                            <th>Parameter</th>
                                            <th>Response</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Data Siswa
                                            </td>
                                            <td>
                                                <code>
                                                    GET
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    /api/v2/{key}/siswa/data_siswa
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    -
                                                </code>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#responseDataSiswa">
                                                    Look Response
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Cari Siswa
                                            </td>
                                            <td>
                                                <code>
                                                    GET
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    /api/v2/{key}/siswa/data_siswa/cari/{parameter}
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    id
                                                </code>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#responseCariDataSiswa">
                                                    Look Response
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Tambah Siswa
                                            </td>
                                            <td>
                                                <code>
                                                    POST
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    /api/v2/{key}/siswa/data_siswa/upload/
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    ?name=
                                                    ?email=
                                                    ?password=
                                                    ?kelas=
                                                    ?tipe_kelas=
                                                    ?role2=
                                                </code>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#responseTambahDataSiswa">
                                                    Look Response
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Hapus Siswa
                                            </td>
                                            <td>
                                                <code>
                                                    DELETE
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    /api/v2/{key}/siswa/data_siswa/hapus/{parameter}
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    id
                                                </code>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#responseHapusDataSiswa">
                                                    Look Response
                                                </button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END OF CENTER CONTENT -->


            </section>
        </div>
        <div class="modal fade" id="responseDataSiswa" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <pre>
                  {
                    "success": true,
                    "message": "List Semua Siswa",
                    "data": [
                      {
                        "id": 2,
                        "name": "Melia",
                        "email": "tolongg@gmail.com",
                        "kelas": null,
                        "tipe_kelas": null,
                        "email_verified_at": null,
                        "role": "user",
                        "role2": "bendahara",
                        "created_at": "2021-12-28T00:29:34.000000Z",
                        "updated_at": "2021-12-28T00:29:34.000000Z"
                      }
                    ]
                  }
                </pre>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="responseCariDataSiswa" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <pre>
                      {
                        "success": true,
                        "message": "Ketemu!",
                        "data": {
                            "id": 2,
                            "name": "Melia",
                            "email": "tolongg@gmail.com",
                            "kelas": null,
                            "tipe_kelas": null,
                            "email_verified_at": null,
                            "role": "user",
                            "role2": "bendahara",
                            "created_at": "2021-12-28T00:29:34.000000Z",
                            "updated_at": "2021-12-28T00:29:34.000000Z"
                        }
                    }
            </pre>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="responseTambahDataSiswa" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <pre>
                      {
                        "success": true,
                        "message": "User Baru Berhasil Disimpan!",
                        "data": {
                            "name": "riiii",
                            "email": "riihaxor5@gmail.com",
                            "kelas": "X",
                            "tipe_kelas": "A",
                            "role2": "Bendahara",
                            "updated_at": "2021-12-28T02:28:16.000000Z",
                            "created_at": "2021-12-28T02:28:16.000000Z",
                            "id": 3
                        }
                    }
        </pre>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="responseHapusDataSiswa" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <pre>
                        {
                            "success": true,
                            "message": "Berhasil Di Hapus"
                        }
        </pre>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
        <x-dcore.footer />
    </div>
</div>
<x-dcore.script />
