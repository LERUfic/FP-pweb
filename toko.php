<?php 
  include "model/gettoko.php";
?>
  <?php include 'base/header.php' ?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4"><?= $datatoko[0]["username"]; ?></h1>
          <div class="list-group">
            <div class="list-group-item">
              <img src="<?= $data["imgtoko"]; ?>" alt="" width="100px" height="100px">
            </div>
            <div href="#" class="list-group-item">Alamat: <?= $datatoko[0]['alamat']; ?></div>
            <div href="#" class="list-group-item">Kontak: <?= $datatoko[0]['kontak']; ?></div>
          </div>

        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">

          <div class="row">
            <?php if(!empty($_SESSION['barangs'])){
              foreach($_SESSION['barangs'] as $row){?>
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top width="700" height="400" src="<?php echo $row['imgBarang'] ?>" alt=""></a>
                      <div class="card-body">
                        <h4 class="card-title"><?php echo $row['namaBarang'] ?></h4>
                        <h5><?php echo $row['hargaBarang'] ?></h5>
                        <p class="card-text"><?php echo $row['deskripsiBarang'] ?></p>
                      </div>
                      <div class="card-footer">
                        <?php if($_SESSION['logindata'] == "penjual"){ ?>
                          <button class="btn btn-danger">Edit Data Barang</button>
                        <?php }else{ ?>
                          <button class="btn btn-danger">Beli Barang</button>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
            <?php }}; ?>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php include 'base/footer.php' ?>