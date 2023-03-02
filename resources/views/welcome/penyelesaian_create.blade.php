@extends('layouts.app')
@section('content')
<div class="container"> 
    <div class="row"> 
        <div class="col-md-12"> 
            <div class="panel panel-default"> 
                <div class="panel-head container-fluid" style="margin-top: 10px;"> <p>Tambah Data Penyelesaian </p> </div> 
                <div class="panel-body"> 
                    <form class="form-horizontal" action="{{ route('penyelesaian.store') }}" method="post"> {{ csrf_field() }} 
                        <div class="form-group"> 
                            <label class="control-label col-sm-2">ID Penyelesaian</label> 
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" name="id_penyelesaian"> 
</div> 
</div> 
                            <div class="form-group"> 
                            <label class="control-label col-sm-2">ID Barang</label> 
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" name="id_barang"> 
</div> 
</div> 
                            <div class="form-group"> 
                            <label class="control-label col-sm-2">Nama Barang</label> 
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" name="nama_barang"> 
</div> 
</div> 
                            <div class="form-group"> 
                            <label class="control-label col-sm-2">Solusi</label> 
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" name="solusi"> 
</div> 
</div> 
                            <div class="form-group"> 
                            <label class="control-label col-sm-2">Waktu Penyelesaian</label> 
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" name="waktu_penyelesaian"> 
</div> 
</div> 
                            <div class="form-group"> 
                            <label class="control-label col-sm-2">Biaya</label> 
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" name="biaya"> 
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