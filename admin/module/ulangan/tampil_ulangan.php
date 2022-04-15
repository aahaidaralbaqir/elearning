    <div class="col-xs-12 col-lg-12">
          <div class="col-xs-12 callout callout-info">
              Berikut data ulangan yang berhasil kami simpan di sistem kami hingga saat ini.
              <h5><?php echo date('D d M Y h:i:s'); ?></h5>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data ulangan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <br><br>
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Ulangan </th>
                  <th>Kode </th>
                  <th>Durasi </th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                      $no =1;
                      $query = $koneksi->prepare("SELECT * FROM `ulangan`");
                      $query->execute();
                      while($data = $query->FETCH(PDO::FETCH_LAZY)){ ?>
                        <tr>
                         <td><?= $no; ?></td>
                         <td><?= $data["nama_ulangan"];?></td>
                         <td><?= $data["kode_token"]; ?></td>
                         <td><?= $data["durasi_ulangan"];?></td>  
                       
                        </tr>
                   <?php  $no++; }
                   ?>
                </tbody>
              </table>
              <br>
              <br>
            </div>
          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->