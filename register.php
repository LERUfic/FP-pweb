<?php include 'base/header.php' ?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">
      
      <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="text-center" style="padding:50px 0">
            <div class="logo"><h1>Register</h1></div>
            <!-- Main Form -->
            <div class="login-form-1">
              <form id="login-form" class="text-left" enctype="multipart/form-data" action="/model/new_user.php" method="POST">
                <div class="login-form-main-message"></div>
                <div class="main-login-form">
                  <div class="login-group">
                    <div class="form-group">
                      <label for="lg_username" class="sr-only">Username</label>
                      <input class="form-control" id="lg_username" name="lg_username" placeholder="username" type="text">
                    </div>
                    <div class="form-group">
                      <label for="lg_password" class="sr-only">Password</label>
                      <input class="form-control" id="lg_password" name="lg_password" placeholder="password" type="password">
                    </div>
                    <div class="form-group">
                      <label for="lg_description" class="sr-only">Description</label>
                      <textarea class="form-control" rows="3" id="lg_description" name="lg_description" placeholder="description"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="lg_type" class="sr-only">Select list (select one):</label>
                        <select class="form-control" id="lg_type" name="lg_type">
                          <option value="penjual">Penjual</option>
                          <option value="pembeli">Pembeli</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="lg_alamat" class="sr-only">Alamat</label>
                      <input class="form-control" id="lg_alamat" name="lg_alamat" placeholder="alamat" type="text">
                    </div>
                    <div class="form-group">
                      <label for="lg_kontak" class="sr-only">Kontak</label>
                      <input class="form-control" id="lg_kontak" name="lg_kontak" placeholder="kontak" type="text">
                    </div>
                    <div class="form-group">
                      <label for="lg_file">Gambar Lapak</label>
                      <input type="file" class="form-control-file" id="lg_file" name="lg_file" aria-describedby="fileHelp">
                      <small id="fileHelp" class="form-text text-muted">Gambar Lapak Anda.</small>
                    </div>
                  <button type="submit" class="btn btn-danger">Register</button>
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