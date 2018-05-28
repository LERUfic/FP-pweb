<?php 
  include 'model/getAllLapak.php';
  session_start();
  if(empty($_SESSION['logindata'])){
    header('Location: /login.php');
  }
?>
  <?php include 'base/header.php' ?>

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
        <?php if(!empty($data)){
          foreach($data as $row){?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" width="700" height="400" src="<?php echo $row['imgPath'] ?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/toko.php?idtoko=<?php echo $row['userid']; ?>"><?php echo $row['username'] ?></a>
                  </h4>
                  <h5>Pemilik: <?php echo $row['username'] ?></h5>
                  <p class="card-text"><?php echo $row['description'] ?></p>
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