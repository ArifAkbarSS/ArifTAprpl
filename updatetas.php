<?php 

include 'koneksi.php';

$id_tas = $_POST['id_tas'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];

mysqli_query($koneksi,"update tas set nama='$nama', harga='$harga' where id_tas='$id_tas'");

header("location:tas.php");
 
?>
