<?php 

include 'koneksi.php';

$no_pembayaran = $_POST['no_pembayaran'];
$no_hp = $_POST['no_hp'];
$id_tas = $_POST['id_tas'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'] ;
$tgl_pesan = $_POST['tgl_pesan'];
$tgl_ambil = $_POST['tgl_ambil'];
$totalbayar = $harga*$jumlah; 

mysqli_query($koneksi,"insert into pembayaran values('$no_pembayaran','$no_hp','$id_tas', '$jumlah','$tgl_pesan','$tgl_ambil','$totalbayar')");
 
header("location:data.php");
 
?>