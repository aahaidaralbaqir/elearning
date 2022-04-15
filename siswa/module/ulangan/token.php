<?php
    $id_ulangan = $_GET["id_ulangan"];
    $query = $koneksi->prepare("SELECT * FROM ulangan WHERE id_ulangan = '$id_ulangan'");
    $query->execute();
    while ($data = $query->fetch(PDO::FETCH_LAZY)) { ?>

    <div class="col-xs-12">
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Input Token</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="module/ulangan/cek_token.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">NAMA ULANGAN</label>
                  <input type="hidden" name="id_ulangan" value="<?= $data["id_ulangan"]; ?>">
                  <input type="text" readonly="" class="form-control" id="exampleInputPassword1" name="nama_ulangan" value="<?= $data["nama_ulangan"]; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">DURASI ULANGAN</label>
                  <input type="text" readonly="" class="form-control" id="exampleInputPassword1" name="durasi_ulangan" value="<?= $data["durasi_ulangan"]." menit"; ?>">
                </div>
                <div class="form-group">
                  <label for="eaxmpleInputPassword1">TOKEN</label>
                  <input type="hidden" name="token" value="<?= $data["kode_token"]; ?>">
                  <input type="text" class="form-control" id="exampleInputPassword1" name="kode_token" placeholder="Masukan Token">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-arrow-right"></i> Mulai</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>

         <?php   }
 ?>