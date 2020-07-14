<?php 

include 'koneksi.php';

$no_pembayaran = $_GET['no_pembayaran'];
 
mysqli_query($koneksi,"delete from pembayaran where no_pembayaran='$no_pembayaran'");

header("location:data.php");
 
?>