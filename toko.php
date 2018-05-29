<?php 
  include "model/gettoko.php";
  include 'base/header.php';
  if(empty($_SESSION['logindata'])){
    header('Location: /login.php');
  };
?>
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
      </div>
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
        <?php if(!empty($data)){
          foreach($data as $row){?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top width="700" height="400" src="<?php echo $row['imgBarang'] ?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title"><?php echo $row['namaBarang'] ?></h4>
                  <h5><?php echo $row['hargaBarang'] ?></h5>
                  <p class="card-text"><?php echo $row['deskripsiBarang'] ?></p>
                </div>
                <div class="card-footer">
                  <?php if($_SESSION['logindata']['tipe'] == "penjual"){ ?>
                    <a href="/editbarang.php?idbarang=<?php echo $row['idbarang']; ?>"><button class="btn btn-danger">Edit</button></a>
                  <?php }else{ ?>
                    <a href="model/belibarang.php?idbarang=<?php echo $row['idbarang']; ?>"><button class="btn btn-info">Beli</button></a>
                  <?php } ?>
                </div>
              </div>
            </div>
        <?php }}; ?>
      </div>
    </div>
  </div>
<?php include 'base/footer.php' ?>