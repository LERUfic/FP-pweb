<?php include 'base/header.php'; 
  if($_SESSION['logindata']['tipe'] != 'penjual'){
    header('Location: /index.php');
  };
?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">
      
      <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="text-center" style="padding:50px 0">
            <div class="logo"><h1>Tambah Barang Dagangan</h1></div>
            <!-- Main Form -->
            <div class="login-form-1">
              <form id="login-form" class="text-left" enctype="multipart/form-data" action="/model/add_barang.php" method="POST">
                <div class="login-form-main-message"></div>
                <div class="main-login-form">
                  <div class="login-group">
                    <div class="form-group">
                      <label for="namabarang" class="sr-only">Nama Barang</label>
                      <input class="form-control" id="namabarang" name="namabarang" placeholder="Nama Barang" type="text">
                    </div>
                    <div class="form-group">
                      <label for="hargabarang" class="sr-only">Harga Barang</label>
                      <input class="form-control" id="hargabarang" name="hargabarang" placeholder="Harga Barang" type="text">
                    </div>
                    <div class="form-group">
                      <label for="deskripsibarang" class="sr-only">Description</label>
                      <textarea class="form-control" rows="3" id="deskripsibarang" name="deskripsibarang" placeholder="description"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="lg_file">Gambar Barang</label>
                      <input type="file" class="form-control-file" id="imgbarang" name="imgbarang" aria-describedby="fileHelp">
                      <small id="fileHelp" class="form-text text-muted">Gambar Barang Dagangan.</small>
                    </div>
                  <button type="submit" class="btn btn-warning">Tambah Barang</button>
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