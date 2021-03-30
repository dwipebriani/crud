<?php 
ob_start();
session_start();
include "config.php";

$id_produk = $_GET['id_produk'];
$query =mysqli_query($koneksi, "SELECT * FROM produk where id_produk = '$id_produk'");
$data = mysqli_fetch_assoc($query);
 ?> 

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>edit</title>

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
    <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Ubah Data Ruang</div>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <div class="col-lg-6">
            <form method="POST">
              <div class="form-group">
                 <div class="form-group">
                <label>Nama Produk</label>
                <input class="form-control" name="nama_produk" value="<?php echo $data['nama_produk'] ;?>">
              </div>
              <div class="form-group">
                <label>Keterangan</label>
                <input class="form-control" name="keterangan" value="<?php echo $data['keterangan']; ?>">
              </div>
                <div class="form-group">
               <label>Harga</label>
                <input class="form-control" name="harga" value="<?php echo $data['harga']; ?>">
              </div>
              <div class="form-group">
             <label>Jumlah</label>
                <input class="form-control" name="jumlah" value="<?php echo $data['jumlah']; ?>">
              </div>
                    <div class="form-group">
                        <input type="submit" name="edit" value="edit" class="btn btn-primary">
                        
                    </div>
            </form>
            </div>
                

            </div>
        </div>

<?php 
if (isset($_POST['edit'])) {
$nama_produk= $_POST['nama_produk'];
$keterangan= $_POST['keterangan'];
$harga= $_POST['harga'];
$jumlah= $_POST['jumlah'];



$ubah = mysqli_query($koneksi, "UPDATE produk SET id_produk='$id_produk',nama_produk='$nama_produk',keterangan='$keterangan',harga='$harga',jumlah='$jumlah' WHERE id_produk='$id_produk'");


 // cek apakah data berhasil ditambahkan atau tidak
  if($ubah) {
    echo "
    <script>
      alert('data berhasil diubah!');
      window.location.href = 'index.php';
    </script> 

    ";
   } else {
     echo "
    <script>
      alert('data gagal diubah!');
      window.location.href = 'index.php';
    </script> ";

    
   }
   }
 



  ?>



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

         


  