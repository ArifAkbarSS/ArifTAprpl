<?php 

include 'koneksi.php';

$no_hp = $_POST['no_hp'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$id_pegawai = $_POST['id_pegawai'];
 

mysqli_query($koneksi,"insert into pelanggan values('$no_hp','$nama','$alamat','$id_pegawai')");
 
header("location:pelanggan.php");
 
?>