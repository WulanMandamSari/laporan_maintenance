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
                    <i class="fas fa-times"></i>
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
        <img src="{{asset('Gambar/logohitam.jpeg')}}" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                  <a href="/pengaduan_admin" class="nav-link active">
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

            @if (auth()->user()->role =="admin,teknisi")
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
                  <a href="/penyelesaian" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
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
          <div class="row mb-2">
              <div class="col-sm-12">
              <h4 class="m-0">Tambah Pengaduan</h4>
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
        <div class="card mt-4">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-head container-fluid" style="margin-top: 10px;">
              </div>
              <div class="card-body">
                <form action="/pengaduan/store" method="post" enctype="multipart/form-data"> {{ csrf_field() }}
                <!-- <div class="form-group">
                    <label class="control-label col-md-8">ID Pengaduan</label>
                    <div class="col-md-20">
                      <input type="text" class="form-control" name="id_pengaduan" value="{{old('id_pengaduan')}}">
                      @if($errors->has('id_pengaduan'))
                          <div class="text-danger">
                            {{ $errors->first('id_pengaduan')}}
                          </div>
                      @endif
                    </div>
                  </div> -->

                  <div class="form-group">
                    <label class="control-label col-md-8">Nama Pelapor</label>
                    <div class="col-md-20">
                      <input type="text" class="form-control" name="nama_pelapor" value="{{old('nama_pelapor')}}">
                      @if($errors->has('nama_pelapor'))
                          <div class="text-danger">
                            {{ $errors->first('nama_pelapor')}}
                          </div>
                      @endif
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-8">No Telepon</label>
                    <div class="col-md-20">
                      <input type="number" class="form-control" name="no_telepon" value="{{old('no_telepon')}}">
                      @if($errors->has('no_telepon'))
                          <div class="text-danger">
                            {{ $errors->first('no_telepon')}}
                          </div>
                      @endif
                    </div>
                  </div>

                <div class="form-group">
                    <label class="control-label col-md-8">Barang</label>
                    <div class="col-md-20">
                      <select name="id_barang" class="form-control">
                        @foreach($barang as $key => $val):
                        <option value="<?= $val['id_barang'] ?>">{{$val['nama_barang']}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-8">Tanggal</label>
                    <div class="col-md-20">
                      <input type="date" class="form-control" name="tanggal" value="{{old('tanggal')}}">
                      @if($errors->has('tanggal'))
                          <div class="text-danger">
                            {{ $errors->first('tanggal')}}
                          </div>
                      @endif
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-8">Waktu</label>
                    <div class="col-md-20">
                      <input type="time" class="form-control" name="waktu" value="{{old('waktu')}}">
                      @if($errors->has('waktu'))
                          <div class="text-danger">
                            {{ $errors->first('waktu')}}
                          </div>
                      @endif
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-8">Lokasi</label>
                    <div class="col-md-20">
                      <select name="id_lokasi" class="form-control">
                        @foreach($lokasi as $key => $val):
                        <option value="<?= $val['id_lokasi'] ?>">{{$val['nama_lokasi']}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-8">Kode Barang</label>
                    <div class="col-md-20">
                    <select class="col-sm-12 form-control" name="kd_barang"
                      id="ID-dropdown"> 
                      <option value="0" aria-readonly="true" aria-required>
                          -- Select Kode Barang --</option> 
                      @foreach ($barang as $key => $val)
                          : 
                          <option value="<?= $val['kd_barang'] ?>"> 
                               {{ $val['kd_barang'] }}</option> 
                      @endforeach 
                      </select>
                      @if($errors->has('kd_barang'))
                          <div class="text-danger">
                            {{ $errors->first('kd_barang')}}
                          </div>
                      @endif
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label col-md-8">Jenis Kerusakan</label>
                    <div class="col-md-20">
                      <input type="text" class="form-control" name="jenis_kerusakan" value="{{old('jenis_kerusakan')}}">
                      @if($errors->has('jenis_kerusakan'))
                          <div class="text-danger">
                            {{ $errors->first('jenis_kerusakan')}}
                          </div>
                      @endif
                    </div>
                    </div>
                  
                    <div class="form-group">
                    <label class="control-label col-md-8">Keterangan</label>
                    <div class="col-md-20">
                      <input type="text" class="form-control" name="keterangan" value="{{old('keterangan')}}">
                      @if($errors->has('keterangan'))
                          <div class="text-danger">
                            {{ $errors->first('keterangan')}}
                          </div>
                      @endif
                    </div>
                    </div>

                  <div class="form-group">
                    <label class="control-label col-md-8">Upload Bukti</label>
                    <div class="col-md-20">
                      <tr>
                        <td><input type="file" class="form-control" name="upload_foto" id="inputGroupFile"></td>
                        @if($errors->has('upload_foto'))
                          <div class="text-danger">
                            {{ $errors->first('upload_foto')}}
                          </div>
                      @endif
                      </tr>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <a href="/pengaduan" class="btn btn-danger">Kembali</a>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                  </div>
                </form>
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