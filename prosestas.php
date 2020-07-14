<?php 

include 'koneksi.php';

$id_tas = $_POST['id_tas'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
 

mysqli_query($koneksi,"insert into tas values('$id_tas','$nama','$harga')");
 
header("location:tas.php");
 
?>