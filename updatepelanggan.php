<?php 

include 'koneksi.php';

$no_hp = $_POST['no_hp'];
$nama = $_POST['nama_pel'];
$alamat = $_POST['alamat'];
$ID_karyawan = $_POST['ID_karyawan'];

mysqli_query($koneksi,"update pelanggan set nama='$nama', alamat='$alamat', ID_karyawan='$ID_karyawan' where no_hp='$no_hp'");

header("location:pelanggan.php");
 
?>
