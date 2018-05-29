<?php 
  include "model/getbarang.php";
?>
  <?php include 'base/header.php' ?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">
        
        <div class="col-lg-1"></div>
        
        <div class="col-lg-11">
          <div class="row"></div>
          <br>
          <div class="row"><a href="/tambahbarang.php"><button class="btn btn-warning">Tambah Barang</button></a></div>
          <br>         
          <div class="row">
            <div class="col-12">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($data)){ 
                    $no = 0;
                    foreach($data as $row){ 
                      $no=$no+1;
                    ?>
                      <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $row['namaBarang'] ?></td>
                        <td><?php echo $row['hargaBarang'] ?></td>
                        <td><a href="/editbarang.php?idbarang=<?php echo $row['idbarang']; ?>"><button class="btn btn-info">Edit</button></a></td>
                        <td><a href="model/deletebarang.php?idbarang=<?php echo $row['idbarang']; ?>"><button class="btn btn-danger">Delete</button></a></td>
                      </tr>
                    <?php } ?>
                  <?php }else{ ?>
                    <tr>
                      <td colspan="5"><center>Tidak Ada Barang Dagangan</center></td>
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