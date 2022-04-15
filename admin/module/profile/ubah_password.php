    <div class="col-xs-12">
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Ubah Password</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form role="form" action="?module=IopXaTY" method="POST">
              <div class="box-body">
                   
            <?php 
              if(isset($_POST["ubah_password"])){
                $password_lama = md5($_POST["password_lama"]);
                $password_baru = md5($_POST["password_baru"]);
                $konfirmasi_password_baru = md5($_POST["konfirmasi_password_baru"]);
                if($password_lama != $_SESSION["password_lama"]){
                  echo "<div class='alert alert-danger'>Konfirmasi password lama tidak sama.</div>";
                }else{
                  if($password_baru != $konfirmasi_password_baru){
                    echo "<div class='alert alert-danger'>Konfirmasi password lama tidak sama.</div>";
                  }else{
                    $query = $koneksi->prepare("UPDATE `admin` SET `password` = '$password_baru'");
                    if($query->execute()){
                      echo '<div class="alert alert-success">Password anda berhasil di ubah</div>';
                    }else{
                    echo "<div class='alert alert-danger'> password gagal di ubah,silahkan logout akun anda dan login kembali .</div>";
                      
                    }

                  }
                }
              }
            ?>
                <div class="form-group">
                  <label for="exampleInputEmail1">Password Lama</label>
                  <input type="text" class="form-control" ida="exampleInputEmail1" name="password_lama" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password Baru</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="password_baru">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Konfirmasi Password Baru</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="konfirmasi_password_baru" >
              
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="ubah_password"><i class="fa fa-save"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
