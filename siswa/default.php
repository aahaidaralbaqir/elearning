<div class="col-xs-12 col-lg-12">
        <div class="col-xs-12 callout callout-info">
          <h4>Hi,  <?= $_SESSION["username"]; ?></h4>
          <p>Selamat datang di aplikasi eLearning mata pelajaran seni budaya.</p>
        </div>  <!-- Small boxes (Stat box) -->
</div>
 <!-- Small boxes (Stat box) -->
      
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
                <?php 
                  $query = $koneksi->prepare("SELECT COUNT(*) AS `jumlahMateri` FROM `materi`");
                  $query->execute(); 
                  while($data = $query->fetch(PDO::FETCH_LAZY)){
                    echo $data["jumlahMateri"];
                  }
                 ?>
                <sup style="font-size: 20px"></sup></h3>

              <p>Materi</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="?module=materi" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>
                 <?php 
                  $query = $koneksi->prepare("SELECT COUNT(*) AS `jumlahUlangan` FROM `ulangan`");
                  $query->execute(); 
                  while($data = $query->fetch(PDO::FETCH_LAZY)){
                    echo $data["jumlahUlangan"];
                  }
                 ?>
              </h3>

              <p>Ulangan</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>
                 <?php 
                  $query = $koneksi->prepare("SELECT COUNT(*) AS `jumlahNilai` FROM `nilai` WHERE `nisn` = '$_SESSION[nisn]'");
                  $query->execute(); 
                  while($data = $query->fetch(PDO::FETCH_LAZY)){
                    echo $data["jumlahNilai"];
                  }
                  ?>
              </h3>

              <p>Nilai</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="?module=nilai" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->

