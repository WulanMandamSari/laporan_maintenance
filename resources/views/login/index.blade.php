<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laporan Maintenance Barang</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
@if($message = Session::get('error'))
  <div class="alert alert-danger alert-block"> 
    <button type="button" class="close" data-dismiss="alert">x</button> 
    <strong> {{ $message }} </strong> 
</div> 
@endif
    <!-- <div class="login-logo">
   <p><b>Laporan Maintenance<b></p>
   <p text="align-center"><b>Barang</b></p>
  </div> -->
    <!-- /.login-logo -->
    <div class="card card-outline card-info">
      <div class="card-header text-canter">
        <h4>
          <p align="center"><b>Laporan Maintenance Barang</b></p>
        </h4>
      </div>
      <div class="card-body">
        <p class="login-box-msg">
          <font color="red">Silahkan Login Terlebih Dahulu</font>
        </p>
        <form action="{{ route('postlogin') }}" method="post">
          {{ csrf_field() }}
          <div class="input-group mb-3">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email" span class="fas fa-envelope"></input>
            <div class="input-group-append">
            </div>
          </div>
          @if($errors->has('email'))
          <div class="text-danger">
            {{ $errors->first('email')}}
          </div>
          @endif
          <div class="input-group mb-3">
            <label>Kata Sandi</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
            </div>
          </div>
      </div>
      @if($errors->has('password'))
      <div class="text-danger">
        {{ $errors->first('password')}}
      </div>
      @endif
      <!-- /.col -->
      <!-- <div class="social-auth-links text-center mt-2 mb-3"> -->
      <!-- <div class="control-label col-md-20"> -->
      <div class="col-md-20">
        <div class="input-group mb-3">
          <center>
            <button type="submit" class="btn btn-block btn-info">
              <font color="black"><b>Masuk</b></font>
            </button>
          </center>
        </div>
      </div>
    </div>
    <!-- <a href="/beranda" class="btn btn-block btn-info">
             <font color="black"><b>Sign In</b></font> 
            </a> -->
    <!-- /.col -->
  </div>
  </form>
  <!-- /.social-auth-links -->
  <p class="mb-1">
  </p>
  <p class="mb-0">
  </p>
  </div>
  <!-- /.login-card-body -->
  </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>
</body>

</html>