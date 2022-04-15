    <div class="col-xs-12">
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Data Siswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="module/siswa/proses_tambah_siswa.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">NISN</label>
                  <input type="text" class="form-control" ida="exampleInputEmail1" name="nisn" placeholder="Nisn">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">NAMA SISWA</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nama_siswa" placeholder="Nama Siswa">
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
                  <label for="exampleInputPassword1">KELAS</label>
                  <select name="kelas" class="form-control">
                    <option selected="" disabled="">[ Pilih Kelas ]</option>
                    <option value="X RPL 1">X RPL 1</option>
                    <option value="X RPL 2">X RPL 2</option>
                    <option value="XI RPL 1">XI RPL 1</option>
                    <option value="XI RPL 2">XI RPL 2</option>
                    <option value="XII RPL 1">XII RPL 1</option>
                    <option value="XII RPL 2">XII RPL 2</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">JENIS KELAMIN</label>
                  <select name="jk" class="form-control">
                    <option selected="" disabled="">[ Pilih Jenis Kelamin ]</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">ALAMAT</label>
                 <textarea name="alamat" class="form-control"></textarea>
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