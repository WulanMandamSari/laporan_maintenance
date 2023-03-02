@extends('layouts.app')
@section('content')
<div class="container"> 
    <div class="row"> 
        <div class="col-md-12"> 
            <div class="panel panel-default"> 
                <div class="panel-head container-fluid" style="margin-top: 10px;"> <p>Tambah Data Kerusakan</p> </div> 
                <div class="panel-body"> 
                    <form class="form-horizontal" action="{{ route('kerusakan.store') }}" method="post"> {{ csrf_field() }} 
                        <div class="form-group"> 
                            <label class="control-label col-sm-2">ID Barang</label> 
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" name="id_barang"> 
</div> 
</div> 
                            <div class="form-group"> 
                            <label class="control-label col-sm-2">ID Kerusakan</label> 
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" name="id_kerusakan"> 
</div> 
</div> 
                            <div class="form-group"> 
                            <label class="control-label col-sm-2">Nama Barang</label> 
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" name="nama_barang"> 
</div> 
</div> 
                            <div class="form-group"> 
                            <label class="control-label col-sm-2">Lokasi ID</label> 
                            <div class="col-sm-10"> 
                                <select>
                                    @foreach($lokasi as $key => $val):
                                        <option value="<?= $val['id_lokasi'] ?>">{{$val['nama_lokasi']}}</option>
                                    @endforeach
                                </select>
</div> 
</div> 
                            <div class="form-group"> 
                            <label class="control-label col-sm-2">Posisi</label> 
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" name="posisi"> 
</div> 
</div> 
                            <div class="form-group"> 
                            <label class="control-label col-sm-2">Upload Foto</label> 
                            <div class="col-sm-10"> 
                            <form action="proses.php" method="POST" enctype="multipart/form-data">
                            <tr><td><input type="file" value="upload_foto" ></td></tr>
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