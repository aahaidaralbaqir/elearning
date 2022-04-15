    <div class="col-xs-12 col-lg-12">
          <div class="col-xs-12 callout callout-info">
               Berikut data materi yang berhasil kami simpan di sistem kami hingga saat ini.
              <h5><?php echo date('D d M Y h:i:s'); ?></h5>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data materi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <br><br>
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama materi </th>
                  <th>Isi materi </th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                      $no =1;
                      $query = $koneksi->prepare("SELECT * FROM `materi`");
                      $query->execute();
                      while($data = $query->FETCH(PDO::FETCH_LAZY)){ ?>
                        <tr>
                         <td><?= $no; ?></td>
                         <td><?= $data["nama_materi"]; ?></td>
                          <td><?php 

                              if(strlen($data["isi_materi"]) > 30){
                                echo substr($data['isi_materi'], 0,30)."...";
                              }else{
                                echo "asd";
                              }


                            ?>
                              
                            </td>
                        </tr>
                   <?php  $no++; }
                   ?>
                </tbody>
              </table>
              <br>
              <br>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->