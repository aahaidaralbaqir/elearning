    <div class="col-xs-12">
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Materi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="module/materi/proses_tambah_materi.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">NAMA MATERI</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nama_materi" placeholder="Nama Materi">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">ISI MATERI</label>
                  <textarea class="form-control" name="isi_materi" placeholder="Isi"></textarea>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>