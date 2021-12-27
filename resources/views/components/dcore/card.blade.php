<div class="row">
    <div class="col-lg-4 col-md-12 col-sm-12">
        <div class="card card-statistic-2">
            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-users"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Siswa Kelas X</h4>
                </div>
                <div class="card-body">
                    {{$x}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12">
        <div class="card card-statistic-2">
            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-users"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Siswa Kelas XI</h4>
                </div>
                <div class="card-body">
                    {{$xi}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12">
        <div class="card card-statistic-2">
            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-key"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Keseluruhan SIswa</h4>
                </div>
                <div class="card-body">
                    {{$x+$xi}}
                </div>
            </div>
        </div>
    </div>
</div>
