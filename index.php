<?php 
ob_start();
session_start();
include "config.php";
 ?> 

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>soal bonus</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">


  <nav class="navbar navbar-expand navbar-dark bg-info static-top">
     <ul class="navbar-nav ml-auto ml-md-8">
   
</ul>
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
  <!--     <i class="fas fa-bars"></i> -->
    </button>



  </nav>

  <div id="wrapper">




    <div id="content-wrapper">

      <div class="container-fluid">


        

  <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
          <div class="card-body">
            <div class="table-responsive">

    <?php   
    include 'config.php';
    $produk = mysqli_query($koneksi, "SELECT * FROM produk ");


  ?>


              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <div class="text-left">
                <a href="tambah.php" class="btn btn-primary">[+]Tambah Produk</a>
                </div><br>  

                <thead class="thead-light">
                  <tr>    
                    <th>No</th>               
                    <th>Nama Produk</th>
                    <th>Keterangan</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Pilih</th>
                  </tr>
                </thead>
                    
                <tbody>
                  <?php 
                  $no=1;  
                    while ($data = mysqli_fetch_array($produk)) {
                   ?>

                      <tr>  
                      <td><?php echo $no++?></td>
                      <td><?php echo $data["nama_produk"] ?></td>
                      <td><?php echo $data["keterangan"] ?></td>
                      <td><?php echo $data["harga"] ?></td>
                      <td><?php echo $data["jumlah"] ?></td>
                      <td><a class="btn btn-info" href="edit.php?id_produk=<?= $data['id_produk']; ?>"><i class="fa fa-cart-plus">Edit</i></a>
                      <a class="btn btn-danger" href="hapus.php?id_produk=<?= $data['id_produk']; ?>"><i class="fa fa-cart-plus">Hapus</i></a> </td> 
                       

                   </tr>
                         <?php   
              } ?>
              </tbody>
        
          </table>


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>

            


  