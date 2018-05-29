<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #4f0c20 !important;">
  <div class="container">
    <a class="navbar-brand" href="#">TOKOREADYA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <?php if(empty($_SESSION['logindata'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="/login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register.php">Register</a>
          </li>
        <?php }else{ ?>
          <li class="nav-item">
            <a class="nav-link" href="/lapak.php">Lihat Toko</a>
          </li>
          <?php if($_SESSION['logindata']['tipe']=="penjual"){?>
            <li class="nav-item">
              <a class="nav-link" href="/mytoko.php">My Toko</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/transaksitoko.php">Transaksi</a>
            </li>  
          <?php }else{ ?>
          <li class="nav-item">
            <a class="nav-link" href="/transaksi.php">Transaksi</a>
          </li>
        <?php } ?>
 <!--          <li class="nav-item">
            <a class="nav-link" href="/setting.php">Setting</a>
          </li>
  -->         <li class="nav-item">
            <a class="nav-link" href="/logout.php">Logout</a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>