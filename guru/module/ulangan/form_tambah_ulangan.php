    <div class="col-xs-12">
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Ulangan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="module/ulangan/proses_tambah_ulangan.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">KODE TOKEN</label>
                  <input type="text" class="form-control" ida="exampleInputEmail1" name="kode_token" placeholder="Kode Token">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">DURASI ULANGAN</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="durasi_ulangan" placeholder="Durasi">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">NAMA ULANGAN</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nama_ulangan" placeholder="Nama Ulangan">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>