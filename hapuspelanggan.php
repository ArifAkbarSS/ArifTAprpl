<?php 

include 'koneksi.php';

$no_hp = $_GET['no_hp'];
 
mysqli_query($koneksi,"delete from pelanggan where no_hp='$no_hp'");

header("location:pelanggan.php");
 
?>