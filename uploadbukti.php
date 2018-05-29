<?php
  session_start();
  if($_SESSION['logindata']['tipe'] != 'pembeli'){
    header('Location: /index.php');
  };
?>
  <?php include 'base/header.php' ?>
    <!-- Page Content -->
    <div class="container">

      <div class="row">
      
      <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="text-center" style="padding:50px 0">
            <div class="logo"><h1>Upload Bukti Transaksasi</h1></div>
            <!-- Main Form -->
            <div class="login-form-1">
              <form id="login-form" class="text-left" enctype="multipart/form-data" action="model/buktistatus.php" method="POST">
                <div class="login-form-main-message"></div>
                <div class="main-login-form">
                  <div class="login-group">
                    <div class="form-group">
                      <input class="form-control" id="barangid" name="barangid" value="<?php echo $_GET['idbarang']; ?>" type="hidden">
                    </div>
                    <div class="form-group">
                      <label for="filebukti">Upload Bukti Transaksi</label>
                      <input type="file" class="form-control-file" id="filebukti" name="filebukti" aria-describedby="fileHelp">
                      <small id="fileHelp" class="form-text text-muted">Gambar Lapak Anda.</small>
                    </div>
                  <button type="submit" class="btn btn-danger">Upload Bukti</button>
                </div>
              </div>
              </form>
            </div>
            <!-- end:Main Form -->
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php include 'base/footer.php' ?>