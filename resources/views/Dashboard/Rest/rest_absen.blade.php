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
                                <h4>Rest Data Absen</h4>
                            </div>
                            <div class="card-body table-responsive">
                                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Key</div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                                        value="83f5872d23747fa1fd5f714d5ca7b6954bbbca115809765a721886c19dc67fcf"
                                        readonly>
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
                                                Data Absen
                                            </td>
                                            <td>
                                                <code>
                                                    GET
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    /api/v2/{key}/absen/data_absen
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    -
                                                </code>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#responseDataAbsen">
                                                    Look Response
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Reset Absensi
                                            </td>
                                            <td>
                                                <code>
                                                    GET
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    /api/v2/{key}/absen/data_absen/reset/{parameter}
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    id
                                                </code>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#responeResetAbsen">
                                                    Look Response
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Tambah Abensi
                                            </td>
                                            <td>
                                                <code>
                                                    POST
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    /api/v2/{key}/absen/data_absen/absen/
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    ?nama=
                                                    ?kelas=
                                                    ?kehadiran=

                                                </code>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#responeTambahDataAbsen">
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
        <div class="modal fade" id="responseDataAbsen" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Example Response Data Absen</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <pre>
                            {
                                "success": true,
                                "message": "List Semua Absensi",
                                "data": [
                                    {
                                        "id": 1,
                                        "pengisi": "Arikun",
                                        "nama": "Melia",
                                        "kelas": "XIIB",
                                        "kehadiran": "HADIR",
                                        "created_at": "2021-12-28T12:24:25.000000Z",
                                        "updated_at": "2021-12-28T12:24:25.000000Z"
                                    }
                                ]
                            }
                </pre>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="responeResetAbsen" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Example Response Reset Absen</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <pre>
                            {
                                "success": true,
                                "message": "Berhasil Di Reset"
                            }
            </pre>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="modal fade" id="responeTambahDataAbsen" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Example Response Tambah Absen</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <pre>
{
    "success": true,
    "message": "Data Baru Berhasil Disimpan!",
    "data": {
        "nama": "KKK",
        "kelas": "XIA",
        "kehadiran": "alfa",
        "updated_at": "2021-12-28T15:12:03.000000Z",
        "created_at": "2021-12-28T15:12:03.000000Z",
        "id": 8
    }
}
            </pre>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <x-dcore.footer />
    </div>
</div>
<x-dcore.script />
