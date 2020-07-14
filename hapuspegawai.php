<?php 

include 'koneksi.php';

$ID_karyawan = $_GET['ID_karyawan'];
 
mysqli_query($koneksi,"delete from karyawan where ID_karyawan='$ID_karyawan'");

header("location:pegawai.php");
 
?>