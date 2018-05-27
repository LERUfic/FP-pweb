<?php 
  $data = array();

  include 'model/getAllLapak.php';
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jual Beli Online di TOKOREADYA</title>

    <!-- Bootstrap core CSS -->
    <link href="static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="static/css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

  <?php include 'base/navbar.php' ?>

    <!-- Page Content -->
    <div class="container">
        
        <div class="col-lg-12">
        <center>
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="static/img/banner/banner1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="static/img/banner/banner2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="static/img/banner/banner3.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </center>

        <div class="row">
          
          <?php if(!empty($_SESSION['lapakdata'])){
              foreach($_SESSION['lapakdata'] as $r){?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" width="700" height="400" src="<?php echo $r['imgPath'] ?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/toko/"<?php echo r['id_toko'] ?> <?php echo $r['namatoko'] ?></a>
                  </h4>
                  <h5>Pemilik: <?php echo r['pemilik'] ?></h5>
                  <p class="card-text"><?php echo r['deskripsi'] ?></p>
                </div>
                <div class="card-footer">  
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