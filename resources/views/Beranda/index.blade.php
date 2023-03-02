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
  <style type="text/css">
    .preloader {
      top: 0;
      left: 0;
      width: 100%;
      height: 90%;
      z-index: 9999;
      position: fixed;
      background-color: white;
    }

    .loading {
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      position: absolute;
      animation: mymove 1.5s infinite alternate;
    }
  </style>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
</head>

<body class="hold-transition sidebar-mini">

  <div class="preloader">
    <div class="loading">
      <img src="Gambar/loading41.gif">
    </div>
  </div>
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
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <div class="media-body">
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <div class="media-body">
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <div class="media-body">
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
          </div>
        </li>
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
      <a href="#" class="brand-link">
        <img src="Gambar/logohitam.jpeg" class="brand-image img-circle elevation-3" style="opacity: .8">
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
              @if (auth()->user()->role =="admin")
               <li class="nav-item">
              <a href="/beranda" class="nav-link active">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  <font color="black">Halaman Utama</font>
                </p>
              </a>
            </li>
              @endif 

              @if (auth()->user()->role =="teknisi")
               <li class="nav-item">
              <a href="/beranda" class="nav-link active">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  <font color="black">Halaman Utama</font>
                </p>
              </a>
            </li>
            @endif 

            @if (auth()->user()->role =="karyawan")
               <li class="nav-item">
              <a href="/beranda" class="nav-link active">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  <font color="black">Halaman Utama</font>
                </p>
              </a>
            </li>
            @endif 

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

                @if (auth()->user()->role =="karyawan")
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/pengaduan" class="nav-link active">
                    <i class="far fa-circle nav-icon text-black"></i>
                    <p>
                      <font color="black">Pengaduan</font>
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
                  <font color="black">Data Transaksi</font>
                </p>
                <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            @endif

            @if (auth()->user()->role =="teknisi")
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  <font color="black">Data Transaksi</font>
                </p>
                <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            @endif
            
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
            <div class="col-sm-6">
              <h1 class="m-0">Halaman Utama</h1>
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
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>{{ $jumlah_kerusakan }}</h3>

                  <p>Kerusakan</p>
                </div>
                <div class="icon">
                  <i class="fas fa-exclamation"></i>
                </div>
                <a href="#" class="small-box-footer"> Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{ $jumlah_penyelesaian }}</h3>

                  <p>Penyelesaian</p>
                </div>
                <div class="icon">
                  <i class="fas fa-dna"></i>
                </div>
                <a href="#" class="small-box-footer"> Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>{{ $jumlah_lokasi }}</h3>

                  <p>Lokasi</p>
                </div>
                <div class="icon">
                  <i class="fas fa-map"></i>
                </div>
                <a href="#" class="small-box-footer"> Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{ $jumlah_barang }}</h3>

                  <p>Barang</p>
                </div>
                <div class="icon">
                  <i class="fas fa-box"></i>
                </div>
                <a href="#" class="small-box-footer"> Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /.row -->
          <!-- /.col-md-6 -->
        </div>
        <!-- /.col -->
        <div class="col-md-3">
          <div class="card card-primary shadow-none">
            <div class="card-header">
              <h3 class="card-title">Kontak</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <span class="tanda"></span>
              <span class="fa fa-map-marker"></span>
              <p>PT KREASI SEJAHTERA TEKNOLOGI</p>
              <span class="fa fa-globe"></span>
              <p> https://kreasisejahtera.com </p>
              <span class="fa fa-phone"></span>
              <p> ( 021 ) 3505114 </p>
              <span class="fa fa-envelope"></span>
              <p> kreasisejahtera@gmail.com </p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.card -->

    </div><!-- /.container-fluid -->
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
  <script src="{{asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{asset('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
  <!-- sweetalert/konfirmasi sebelum hapus -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
  <script>
    if ($('#table-data')) {
      $('#table-data').DataTable()
    }
  </script>

  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.preloader').delay('50000').fadeout();
    });
  </script>
</body>

</html>