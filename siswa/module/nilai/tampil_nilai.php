      <div class="col-xs-12 col-lg-12">
          <div class="col-xs-12 callout callout-info">
              Berikut adalah data hasil ulangan yang berhasil anda ikuti
          </div>
    </div>
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data nilai</h3>
            </div>
            <div class='box-body'>
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Ulangan</th>
                  <th>Nilai</th>
                  <th>Status</th>
                </tr>
                </thead>

                <tbody>
                  <?php 
                      $no =1;
                      $query = $koneksi->prepare("SELECT `ulangan`.`nama_ulangan`, `nilai`.*
                      FROM `ulangan`
                          INNER JOIN `nilai` ON `nilai`.`id_ulangan` = `ulangan`.`id_ulangan` WHERE `nilai`.`nisn` = '$_SESSION[nisn]'");
                      $query->execute();
                      while($data = $query->FETCH(PDO::FETCH_LAZY)){ ?>
                        <tr>
                         <td><?= $no; ?></td>
                         <td><?= $data["nama_ulangan"]; ?></td>
                         <td><?= $data["nilai"]; ?></td>
                         <td>
                           <?php 
                              if($data["nilai"] >= 78){
                                echo "LULUS";
                              }else{
                                echo "REMEDIAL";
                              }
                            ?>
                         </td>
                        </tr>
                   <?php $no++; }
                   ?>
                </tbody>
              </table><div class="col-xs-12">
            </div>
            <div class="box-footer">
              <a href="index.php" class="btn btn-primary"><i class="fa fa-reply"></i> Kembali</a>
            </div>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->