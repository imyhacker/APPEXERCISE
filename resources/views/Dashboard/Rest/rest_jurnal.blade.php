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
                                <h4>Rest Data Jurnal</h4>
                            </div>
                            <div class="card-body table-responsive">
                                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Key</div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                                        value="45273ac6e63876df2a31f46d4f91e51a0f68b30be12f6feb59b8884266cbbcb0"
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
                                                Data Blog
                                            </td>
                                            <td>
                                                <code>
                                                    GET
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                /api/v2/{key}/blog/data_blog
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    -
                                                </code>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#responseDataBlog">
                                                    Look Response
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Upload Artikel
                                            </td>
                                            <td>
                                                <code>
                                                    POST
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                /api/v2/{key}/blog/data_blog/upload
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    ?tag=
                                                    ?judul=
                                                    ?isi=
                                                </code>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#responeUploadArtikel">
                                                    Look Response
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Hapus Artikel
                                            </td>
                                            <td>
                                                <code>
                                                    DELETE
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    /api/v2/{key}/blog/data_blog/hapus/{parameter}
                                                </code>
                                            </td>
                                            <td>
                                                <code>
                                                    id
                                                </code>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#responeHapusArtikel">
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
        <div class="modal fade" id="responseDataBlog" tabindex="-1" aria-labelledby="exampleModalLabel"
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
    "message": "List Semua Artikel",
    "data": [
        {
            "id": 4,
            "uploader": null,
            "tag": "SPPD",
            "gambar": null,
            "judul": "Laravel keren",
            "isi": "keren",
            "slug_blog": "laravel_kereng0g5o",
            "created_at": "2021-12-27T16:19:16.000000Z",
            "updated_at": "2021-12-27T16:19:16.000000Z"
        },
        {
            "id": 5,
            "uploader": null,
            "tag": "SPPD",
            "gambar": null,
            "judul": "Laravel keren",
            "isi": "keren",
            "slug_blog": "laravel_kerenqlo2Y",
            "created_at": "2021-12-27T16:19:36.000000Z",
            "updated_at": "2021-12-27T16:19:36.000000Z"
        },
        {
            "id": 6,
            "uploader": "Unknown",
            "tag": "SPPD",
            "gambar": null,
            "judul": "Laravel keren",
            "isi": "keren",
            "slug_blog": "laravel_kerenJnplC",
            "created_at": "2021-12-27T16:20:23.000000Z",
            "updated_at": "2021-12-27T16:20:23.000000Z"
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
        <div class="modal fade" id="responeUploadArtikel" tabindex="-1" aria-labelledby="exampleModalLabel"
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
    "message": "Artikel Baru Berhasil Disimpan!",
    "data": {
        "tag": "sppd",
        "judul": "hai",
        "isi": "asd",
        "uploader": "Unknown",
        "slug_blog": "haiL0GP0",
        "updated_at": "2021-12-28T15:01:32.000000Z",
        "created_at": "2021-12-28T15:01:32.000000Z",
        "id": 7
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
        <div class="modal fade" id="responeHapusArtikel" tabindex="-1" aria-labelledby="exampleModalLabel"
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
