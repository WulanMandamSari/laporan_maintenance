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
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
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
      <img src="Gambar/logohitam.jpeg" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-black"><b>PT. Kreasi Sejahtera</b></span>
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
                  <a href="/kerusakan" class="nav-link">
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
                  <a href="/kerusakan_teknisi" class="nav-link">
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
                  <a href="/penyelesaian_teknisi" class="nav-link">
                    <i class="far fa-circle nav-icon text-black"></i>
                    <p>
                      <font color="black">Penyelesaian Teknisi</font>
                    </p>
                  </a>
                </li>
              </ul>
              @endif 

              <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  <font color="black">Laporan</font>
                </p>
                <i class="right fas fa-angle-left"></i>
                </p>
              </a>

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
                  <a href="/cetak-data-penyelesaian-pertanggal" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      <font color="black">Cetak Data Penyelesaian</font>
                    </p>
                  </a>
                </li>
                </ul>
                @endif 

                <li class="nav nav-item">
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
        @if(session('Data ditambah'))
        <div class="alert alert-primary" role="alert">
          {{session('Data ditambah')}}
        </div>
        @endif

        @if(session('Data diedit'))
        <div class="alert alert-success" role="alert">
          {{session('Data diedit')}}
        </div>
        @endif

        @if(session('Data dihapus'))
        <div class="alert alert-danger" role="alert">
          {{session('Data dihapus')}}
        </div>
        @endif
        <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
            <h1 class="m-0"></h1>
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
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="card card-info card-outline">
                <div class="card-header">
                  <h3>Cetak Data Penyelesaian</h3>
                </div>
                <div class="card-body">
                  <div class="input-group mb-3">
                    <label class="control-label col-sm-3">Tanggal Awal</label>
                    <div class="col-sm-12">
                      <input type="date" name="tglawal" id="tglawal" class="form-control">
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <label class="control-label col-sm-3">Tanggal Akhir</label>
                    <div class="col-sm-12">
                      <input type="date" name="tglakhir" id="tglakhir" class="form-control">
                    </div>
                  </div>
                    <div class="input-group mb-3"> 
                      <a href="/cetakpertanggal" onclick="this.href='/cetakpertanggal/'+document.getElementById('tglawal').value +
                      '/' + document.getElementById('tglakhir').value" class="btn btn-primary">
                      Cetak Laporan Pertanggal &nbsp;&nbsp;<i class="fas fa-print"></i></a>&nbsp;
                      <a href="/cetak-penyelesaian" class="btn btn-primary">Cetak Keseluruhan</a>
                </div>
                </div> 
            </div> 
            <div class="card card-info card-outline"> 
              <div class="card-body"> 
                <h4>Keterangan :</h4> 
                <p class="card-text">Untuk menampilkan preview dan opsi print bisa Reload Halaman atau tekan Ctrl+p</p>
        </div> 
    </div>
    <!-- ./col -->
</div>
    <!-- /.content -->
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
    <!-- To the right -->
    <!-- Default to the left -->
  <!-- <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved. -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>

<script>
    if ($('#table-data')) {
        $('#table-data').DataTable({
          "columnDefs": [
    { "width": "20%", "targets": 7 }
  ]
        })
    }
</script>
</body>
</html>
