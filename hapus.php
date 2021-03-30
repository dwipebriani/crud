<?php 	
include'config.php';
$id_produk= $_GET['id_produk'];
$hapus =mysqli_query($koneksi, "DELETE FROM produk where id_produk = '$id_produk'");


if ($hapus) {
	header("location:index.php " );

} else{

echo'<script language="javascript">alert("Gagal Hapus Ruang"); window.history.back();</script>';
}
 ?> 