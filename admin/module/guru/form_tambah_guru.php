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
                  <input type="text" class="form-control" ida="exampleInputEmail1" name="nip" placeholder="Nomor Induk Pegawai">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">NAMA GURU</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="name" placeholder="Nama Guru">
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
                  <input type="text" class="form-control" id="exampleInputPassword1" name="telephone" placeholder="Telepon">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">JENIS KELAMIN</label>
                  <select name="gender" class="form-control">
                    <option selected="" disabled="">[ Pilih Jenis Kelamin ]</option>
                    <option value="0">Laki-laki</option>
                    <option value="1">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">ALAMAT</label>
                 <textarea name="address" class="form-control"></textarea>
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