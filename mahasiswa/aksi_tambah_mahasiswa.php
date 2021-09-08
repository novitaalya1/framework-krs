<?php
$nim=$_POST['nim'];
$nama_mhs=$_POST['nama_mhs'];
$jk=$_POST['jk'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];

include("../koneksi.php");

$sql="INSERT INTO tb_mahasiswa(nim,nama_mhs,jk,alamat,no_hp) VALUES ('$nim','$nama_mhs','$jk','$alamat','$no_hp')";

$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index.php?hal=mahasiswa&pesan=berhasil_tambah");
}else{
	header("location:../index.php?hal=mahasiswa&pesan=gagal_tambah");
	echo mysqli_error($mysqli);
	echo "$sql";
}


