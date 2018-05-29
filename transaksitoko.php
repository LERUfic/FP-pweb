<?php 
  include "model/getbarangtoko.php";
  if($_SESSION['logindata']['tipe'] != 'penjual'){
    header('Location: /index.php');
  };
?>
  <?php include 'base/header.php'; ?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">
        
        <div class="col-lg-1"></div>
        
        <div class="col-lg-11">
          <div class="row"></div>
          <br>
          <br>         
          <div class="row">
            <div class="col-12">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($data)){ 
                    $no = 0;
                    foreach($data as $row){ 
                      $no=$no+1;
                    ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['namaBarang']; ?></td>
                        <td><?php echo $row['hargaBarang']; ?></td>
                        <?php  if($row['statusBarang'] == 1){ ?>
                          <td>Menunggu Upload Bukti.</td>
                        <?php }elseif($row['statusBarang'] == 2){ ?>
                          <td><a href="model/prosesbarang.php?idbarang=<?php echo $row['idbarang']; ?>"><button class="btn btn-warning">Proses Barangnya Sekarang.</button></a> <a href="<?php echo $row['imgBukti']; ?>" download >Download Bukti</a></td>
                        <?php }elseif($row['statusBarang'] == 3){ ?>
                          <td>Barang Telah di Proses. Menunggu Konfirmasi Pembeli.</td>
                        <?php }elseif($row['statusBarang'] == 4){ ?>
                          <td>Barang telah sampai ke Pembeli</td>  
                      </tr>
                    <?php }} ?>
                  <?php }else{ ?>
                    <tr>
                      <td colspan="4"><center>Tidak Ada Barang yang Dibeli.</center></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
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