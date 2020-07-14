<?php 

include 'koneksi.php';

$id_tas = $_GET['id_tas'];
 
mysqli_query($koneksi,"delete from tas where id_tas='$id_tas'");

header("location:tas.php");
 
?>