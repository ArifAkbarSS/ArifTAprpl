<?php 

include 'koneksi.php';

$ID_karyawan = $_POST['ID_karyawan'];
$nama = $_POST['nama_karyawan'];
$jabatan = $_POST['jabatan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
 

mysqli_query($koneksi,"insert into pegawai values('$ID_karyawan','$nama_karyawan','$jabatan','$jenis_kelamin')");
 
header("location:karyawan.php");
 
?>