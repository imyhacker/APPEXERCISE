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
                                <h4>Rest Data Keuangan</h4>
                            </div>
                            <div class="card-body table-responsive">
                                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Key</div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                                        value="81269c0a261b22bc2a70c4cb7a6f8557a6414046450315e3a027f384baf94570"
                                        readonly>
                                </div>
                                <table class="table">
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
                                                Data Keuangan
                                            </td>
                                            <td>
                                                <code>
                                                    GET
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    /api/v2/{key}/keuangan/data_keuangan
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    -
                                                </code>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#responseDataKeuangan">
                                                    Look Response
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Tambah Pemasukan
                                            </td>
                                            <td>
                                                <code>
                                                    POST
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    /api/v2/{key}/keuangan/data_keuangan/tambah_pemasukan/{parameter}
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    ?name=
                                                    ?pemasukan=
                                                </code>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#responseTambahPemasukan">
                                                    Look Response
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Tambah Pengeluaran
                                            </td>
                                            <td>
                                                <code>
                                                    POST
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    /api/v2/{key}/keuangan/data_keuangan/tambah_pengeluaran/{parameter}
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    ?name=
                                                    ?untuk=
                                                    ?tujuan=
                                                    ?pengeluaran=
                                                </code>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#responseTambahPengeluaran">
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
        <div class="modal fade" id="responseDataKeuangan" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                                "message": "Data Keuangan",
                                "total_pemasukan": "97000",
                                "total_pengeluaran": "77000",
                                "total_uang": 20000
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
        <div class="modal fade" id="responseTambahPemasukan" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                                "message": "Berhasil Menambahkan Pemasukan",
                                "data": {
                                    "name": "arikuntul",
                                    "pemasukan": "50000",
                                    "updated_at": "2021-12-28T14:02:44.000000Z",
                                    "created_at": "2021-12-28T14:02:44.000000Z",
                                    "id": 4
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
        <div class="modal fade" id="responseTambahPengeluaran" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                                "message": "Berhasil Menambahkan Pengeluaran",
                                "data": {
                                    "name": "arikuntul",
                                    "untuk": "beli alat",
                                    "tujuan": "makan makan",
                                    "pengeluaran": "50000",
                                    "updated_at": "2021-12-28T14:25:08.000000Z",
                                    "created_at": "2021-12-28T14:25:08.000000Z",
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

        <x-dcore.footer />
    </div>
</div>
<x-dcore.script />
