    <div class="col-xs-12 col-lg-12">
          <div class="col-xs-12 callout callout-info">
              Untuk menampilkan soal silahkan pilih data ulangan terlebih dahulu,lalu klik tombol "Tambah Soal" untuk menambahkan soal.
              <h5>Note : Buatlah soal dengan baik dan benar</h5>
          </div>
        </div>
        <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pilih ulangan terlebih dahulu</h3>
            </div>
            <!-- /.box-header -->
            <form action="index.php?module=ghjKK" method="POST">
            <div class="box-body">
                
                <div class="form-group">
                  <label for="exampleInputPassword1">PILIH ULANGAN</label>
                  <select class="form-control" name="id_ulangan">
                    <option selected="" disabled="">[ Pilih ulangan ]</option>
                    <?php 
                        $query = $koneksi->prepare("SELECT * FROM `ulangan`");
                        $query->execute();
                        while($data = $query->fetch(PDO::FETCH_LAZY)){ ?>
                            <option value="<?= $data["id_ulangan"]; ?>"><?= $data["nama_ulangan"] ?></option>
                        <?php }
                     ?>
                  </select>
                </div>       
             <div class="box-footer">
                <button type="submit" name="filterSoal" class="btn btn-primary pull-left"><i class="fa fa-search"></i> Filter</button>
            </div>
            </form>
            </div>
            <!-- /.box-body -->
          </div>
            <?php 
              if(isset($_POST["filterSoal"])){ ?>
                     <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data soal</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <a href="?module=tambah_soal" class="btn btn-primary"><i class="fa fa-print"></i> Tambah Soal</a>
              <br><br>
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Pertanyaan </th>
                  <th>A </th>
                  <th>B </th>
                  <th>C </th>
                  <th>D </th>
                  <th>Jawaban </th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  error_reporting(0);
                      $id_ulangan = $_POST["id_ulangan"]; 
                      $no =1;
                      $query = $koneksi->prepare("SELECT * FROM `soal` WHERE `id_ulangan` ='$id_ulangan'");
                      $query->execute();
                      if($query->rowCount() <= 0){
                        echo "<tr><td colspan='8'>Tidak ada soal<td><tr>";
                      }else{
                          while($data = $query->FETCH(PDO::FETCH_LAZY)){ ?>
                              <tr>
                               <td><?= $no; ?></td>
                               <td><?= $data["pertanyaan"]; ?></td>
                               <td><?= $data["pilihan_a"];?></td>
                               <td><?= $data["pilihan_b"];?></td>
                               <td><?= $data["pilihan_c"];?></td>
                               <td><?= $data["pilihan_d"];?></td>
                               <td><?= $data["jawaban"];?></td>
                           
                              </tr>
                         <?php  $no++; }
                      }
                
                   ?>
                </tbody>
              </table>
              <br>
              <br>
            </div>
            <!-- /.box-body -->
          </div>
              <?php }
             ?>
          <!-- /.box -->
        </div>
        <!-- /.col -->