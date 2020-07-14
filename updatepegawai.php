<?php 

include 'koneksi.php';

$id_pegawai = $_POST['id_pegawai'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];

mysqli_query($koneksi,"update pegawai set nama='$nama', alamat='$alamat', nohp = '$nohp' where id_pegawai='$id_pegawai'");

header("location:pegawai.php");
 
?>
