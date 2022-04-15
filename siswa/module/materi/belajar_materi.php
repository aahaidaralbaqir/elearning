<div class="col-xs-12">

          <div class="box" style="padding: 20px; box-sizing: border-box;">
           
            
                  <?php 
                      $no =1;
                      $id_materi = $_GET["id_materi"];
                      $query = $koneksi->prepare("SELECT * FROM `materi` WHERE `id_materi` = '$id_materi'");
                      $query->execute();
                      while($data = $query->FETCH(PDO::FETCH_LAZY)){ ?>
                        <h3 align="center"><?= $data["nama_materi"]; ?></h3>
                        <p align="center" style="text-align: justify;"><?= $data["isi_materi"]; ?></p>
                        <a href="?module=materi" class="btn btn-primary"><i class="fa fa-reply"></i> Kembali </a>
                   <?php  $no++; }            
                   ?>                           
            </div>
            <!-- /.box-body -->
          <!-- /.box -->
 </div>
        <!-- /.col -->
