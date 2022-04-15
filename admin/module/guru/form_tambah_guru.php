    <div class="col-xs-12">
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Data Guru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="module/guru/proses_tambah_guru.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">NIP</label>
                  <input type="text" class="form-control" ida="exampleInputEmail1" name="nip" placeholder="Nip">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">NAMA GURU</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nama_guru" placeholder="Nama Guru">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">USERNAME</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">PASSWORD</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">TELEPON</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="tlp_guru" placeholder="Telepon">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">JENIS KELAMIN</label>
                  <select name="jk_guru" class="form-control">
                    <option selected="" disabled="">[ Pilih Jenis Kelamin ]</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">ALAMAT</label>
                 <textarea name="alamat_guru" class="form-control"></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>