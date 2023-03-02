<div class="container">
        <div class="card mt-4"> 
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-head container-fluid" style="margin-top: 10px;">
                <p></p>
              </div>
              <div class="card-body">
                <form class="form-horizontal" action="/barang/update" method="post"> {{ csrf_field() }}
                  <input type="hidden" name="_method" value="PUT">
                  <div class="form-group"> 
            <label class="control-label col-md-8">ID</label> 
            <div class="col-md-20"> 
                <input type="text" class="form-control" name="id" value="{{ $barang->id }}" disabled> 
</div> 
</div> 
                  <div class="form-group">
                    <label class="control-label col-md-8">Nama Barang</label>
                    <div class="col-md-20">
                      <input type="text" class="form-control" name="nama_barang" value="{{ $barang->nama_barang }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">Perbaharui Data</button>
                      <a href="/barang" class="btn btn-danger">Kembali</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>