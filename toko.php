<?php 
  $data = array();
  $data["namatoko"] = "Aguel";
  $data["imgtoko"] = "img/full.png";
  $data["alamat"] = "Jalan TC 2018";
  $data["kontak"] = "085702400989";
  include "model/gettoko.php";
?>
  <?php include 'base/header.php' ?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4"><?= $data["namatoko"]; ?></h1>
          <div class="list-group">
            <div class="list-group-item">
              <img src="<?= $data["imgtoko"]; ?>" alt="" width="100px" height="100px">
            </div>
            <div href="#" class="list-group-item">Alamat: <?= $data['alamat']; ?></div>
            <div href="#" class="list-group-item">Kontak: <?= $data['kontak']; ?></div>
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

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" width="700" height="400" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Two</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Three</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Four</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Five</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Six</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php include 'base/footer.php' ?>