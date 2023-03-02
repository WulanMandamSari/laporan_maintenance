@extends('layouts.app')
@section('content')
<div class="container"> 
    <div class="row"> 
        <div class="col-md-12"> 
            <div class="panel panel-default"> 
                <div class="panel-head container-fluid" style="margin-top: 10px;"> <p>Tambah Lokasi </p> </div> 
                <div class="panel-body"> 
                    <form class="form-horizontal" action="{{ route('lokasi.store') }}" method="post"> {{ csrf_field() }} 
                        <div class="form-group"> 
                            <label class="control-label col-sm-2">ID Lokasi</label> 
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" name="id_lokasi"> 
</div> 
</div> 
                            <div class="form-group"> 
                            <label class="control-label col-sm-2">Nama Lokasi</label> 
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" name="nama_lokasi"> 
</div> 
</div> 
    <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10"> 
        <button type="submit" class="btn btn-primary">Simpan</button> 
</div> 
</div> 
</form> 
</div> 
</div> 
</div> 
</div> 
</div> 
@endsection