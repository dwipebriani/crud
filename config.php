<?php 
global $koneksi;

$namaserver = "localhost";
$username = "root";
$password = "";
$namadb = "arkademy";

$koneksi = mysqli_connect($namaserver,$username,$password,$namadb);

if(!$koneksi){
	die("koneksi Gagal".mysqli_connect_error());
}

 ?>