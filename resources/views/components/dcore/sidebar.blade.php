<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">{{config('app.name')}}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class=active><a class="nav-link" href="{{route('home')}}">My Home</a></li>
                </ul>
            </li>

            <li class="menu-header">Stisla</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i> <span>Siswa</span></a>
                <ul class="dropdown-menu">
                @can('isAdmin')

                    <li><a class="nav-lin beep beep-sidebar" href="{{route('data_siswa')}}">Data Siswa</a></li>
                    @endcan
                    @if(Gate::check('isAdmin') || Auth::user()->role2 == 'ketua' || Auth::user()->role2 == 'wakil' || Auth::user()->role2 == 'bendahara' || Auth::user()->role2 == 'sekertaris')
                    <li><a class="nav-lin beep beep-sidebar" href="{{route('absen_siswa')}}">Absen Siswa</a></li>
                    @endif
                    
                </ul>
            </li>
            @if(Gate::check('isAdmin') || Auth::user()->role2 == 'bendahara' || Auth::user()->role2 == 'ketua' || Auth::user()->role2 == 'wakil')

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-dollar-sign"></i> <span>Keuangan</span></a>
                <ul class="dropdown-menu">

                    <li><a class="nav-lin beep beep-sidebar" href="{{route('data_keuangan')}}">Data Keuangan</a></li>
                </ul>
            </li>
            @endif
            @if(Gate::check('isAdmin') || Auth::user()->role2 == 'sekertaris' || Auth::user()->role2 == 'ketua' || Auth::user()->role2 == 'wakil')
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-pencil-alt"></i> <span>Jurnal</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-lin beep beep-sidebar" href="{{route('blog')}}">Blog</a></li>
                    <li><a class="nav-lin beep beep-sidebar" href="{{route('foto')}}">Foto Kegiatan</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-trophy"></i> <span>Addons</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="https://demo.getstisla.com/forms-advanced-form.html">Cetak
                            Sertifikat</a></li>
                </ul>
            </li>
            @endif
            @can('isAdmin')
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i> <span>Pengaturan Aplikasi</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('pengaturan')}}">Pengaturan</a></li>
                </ul>
            </li> 
            @endcan
        </ul>
        @can('isAdmin')

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
        @endcan
    </aside>
</div>
