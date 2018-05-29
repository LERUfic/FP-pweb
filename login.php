<?php include 'base/header.php';

  if($_SESSION['logindata']['tipe'] == 'penjual'){
    header('Location: /mytoko.php');
  };
  if($_SESSION['logindata']['tipe'] == 'pembeli'){
    header('Location: /lapak.php');
  };
?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">
      
      <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="text-center" style="padding:50px 0">
            <div class="logo"><h1>login</h1></div>
            <!-- Main Form -->
            <div class="login-form-1">
              <form id="login-form" class="text-left" novalidate="novalidate" method="POST" action="model/loginauth.php">
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
                  </div>
                  <button type="submit" class="btn btn-danger">Login</button>
                </div>
                <div class="etc-login-form">
                  <p>new user? <a href="/register.php">create new account</a></p>
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