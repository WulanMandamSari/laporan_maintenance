<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laporan Maintenance Barang</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-info navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-info elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="{{ asset('Gambar/logohitam.jpeg')}}" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-black"><b>PT Kreasi Sejahtera</b></span>
        <!-- <marquee class="brand-text font-weight-lignt"><font color="black">PT Kreasi Sejahtera Teknologi</font></marquee> -->
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Cari" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="/beranda" class="nav-link active">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  <font color="black">Halaman Utama</font>
                </p>
              </a>
            </li>
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  <font color="black">Data Master</font>
                </p>
                <i class="right fas fa-angle-left"></i>
                </p>
              </a>

              @if (auth()->user()->role =="admin")
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/kerusakan" class="nav-link active">
                    <i class="far fa-circle nav-icon text-black"></i>
                    <p>
                      <font color="black">Kerusakan</font>
                    </p>
                  </a>
                </li>
                </ul>
                @endif

                @if (auth()->user()->role =="teknisi")
                <ul class="nav nav-treview">
                <li class="nav-item">
                  <a href="/kerusakan_teknisi" class="nav-link active">
                    <i class="far fa-circle nav-icon text-black"></i>
                    <p>
                      <font color="black">Kerusakan Teknisi</font>
                    </p>
                  </a>
                </li>
                </ul>
                @endif

                @if (auth()->user()->role =="admin")
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/pengaduan_admin" class="nav-link">
                    <i class="far fa-circle nav-icon text-black"></i>
                    <p>
                      <font color="black">Pengaduan</font>
                    </p>
                  </a>
                </li>
                </ul>
                @endif

                @if (auth()->user()->role =="admin")
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/lokasi" class="nav-link">
                    <i class="far fa-circle nav-icon text-black"></i>
                    <p>
                      <font color="black">Lokasi</font>
                    </p>
                  </a>
                </li>
                </ul>
                @endif

                @if (auth()->user()->role =="admin")
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/barang" class="nav-link">
                    <i class="far fa-circle nav-icon text-black"></i>
                    <p>
                      <font color="black">Barang</font>
                    </p>
                  </a>
                </li>
                </ul>
                @endif

            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  <font color="black">Data Transaksi</font>
                </p>
                <i class="right fas fa-angle-left"></i>
                </p>
              </a>

              @if (auth()->user()->role =="admin")
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/penyelesaian" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      <font color="black">Penyelesaian</font>
                    </p>
                  </a>
                </li>
                </ul>
                @endif 

                @if (auth()->user()->role =="teknisi")
                <ul class="nav nav-treview">
                <li class="nav-item">
                  <a href="/penyelesaian_teknisi"  class="nav-link">
                    <i class="far fa-circle nav-icon text-black"></i>
                    <p>
                      <font color="black">Penyelesaian Teknisi</font>
                    </p>
                  </a>
                </li>
              </ul>
              @endif 

              @if (auth()->user()->role =="admin")
              <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  <font color="black">Laporan</font>
                </p>
                <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              @endif

              <!-- @if (auth()->user()->role =="admin")
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/cetak-kerusakan" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      <font color="black">Cetak Data</font>
                    </p>
                  </a>
                </li>
                </ul>
                @endif  -->

                @if (auth()->user()->role =="admin")
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/cetak-data-kerusakan-pertanggal" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      <font color="black">Cetak Data Kerusakan</font>
                    </p>
                  </a>
                </li>
                </ul>
                @endif 

                <!-- @if (auth()->user()->role =="admin")
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/cetak-penyelesaian" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      <font color="black">Cetak Data</font>
                    </p>
                  </a>
                </li>
                </ul>
                @endif  -->

                @if (auth()->user()->role =="admin")
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/cetak-data-penyelesaian-pertanggal" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      <font color="black">Cetak Data Penyelesaian</font>
                    </p>
                  </a>
                </li>
                </ul>
                @endif 

                <li class="nav-item">
                  <a href="/logout" class="nav-link" onclick="return confirm('Apakah Anda Ingin Keluar?')">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                      <font color="black">
                        Keluar
                      </font>
                    </p>
                  </a>
                </li>
              </ul>
            </li>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-12">
              <h1 class="m-0">Data Detail Kerusakan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="container">
        <div class="card mt-3">
          <div class="card-header">
            <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="form-horizontal">
                <div class="card-body"> 
                <!-- <form class="form-horizontal" action="/kerusakan/show/{{ $kerusakan->id }}" method="post" enctype="multipart/form-data"> {{ csrf_field() }} -->
                  <!-- <input type="hidden" name="_method" value="PUT"> -->
                  <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">ID Kerusakan</label>
                    <div class="col-sm-10">
                    <b>:</b> {{ $kerusakan->id_kerusakan }}
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nama Pelapor</label>
                    <div class="col-sm-10">
                    <b>:</b> {{ $kerusakan->nama_pelapor }}
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">No Telepon</label>
                    <div class="col-sm-10">
                    <b>:</b> {{ $kerusakan->no_telepon }}
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Barang</label>
                    <div class="col-sm-10">
                    <b>:</b> {{ $kerusakan->barang->nama_barang }}
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                    <b>:</b> {{ date('d F Y', strtotime($kerusakan->tanggal)) }}
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Waktu</label>
                    <div class="col-sm-10">
                    <b>:</b> {{ $kerusakan->waktu }}
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                    <b>:</b> {{ $kerusakan->lokasi->nama_lokasi }}
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                    <b>:</b> {{ $kerusakan->kd_barang }}
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Jenis Kerusakan</label>
                    <div class="col-sm-10">
                    <b>:</b> {{ $kerusakan->jenis_kerusakan }}
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                    <b>:</b> {{ $kerusakan->keterangan }}
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Upload Bukti</label>
                    <div class="col-sm-10">
                    <b>:</b>
                      <img src="{{ asset('Gambar/'. $kerusakan->upload_foto ) }}" height="113%" width="12%" alt="">
                      <!-- <a href="{{ asset('Gambar/'. $kerusakan->upload_foto ) }}" target="_blank" rel="noopener noreferrer">Lihat Gambar</a> -->
                      {{ $kerusakan->upload_foto }}
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <a href="/kerusakan" class="btn btn-warning">Kembali</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
          <h5>Title</h5>
          <p>Sidebar content</p>
        </div>
      </aside>
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      <!-- To the right -->
      <!-- Default to the left -->
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
</body>
</html>