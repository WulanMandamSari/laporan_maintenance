<div class="container">
        <div class="card mt-4">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-head container-fluid" style="margin-top: 10px;">
              </div>
              <div class="card-body">
                <form action="/lokasi/store" method="post"> {{ csrf_field() }}
                  <div class="form-group">
                    <label class="control-label col-md-8">Nama Lokasi</label>
                    <div class="col-md-20">
                      <input type="text" class="form-control" name="nama_lokasi">

                      @if($errors->has('nama_lokasi'))
                      <div class="text-danger">
                        {{ $errors->first('nama_lokasi')}}
                      </div>
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                      <a href="/lokasi" class="btn btn-danger">Kembali</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>