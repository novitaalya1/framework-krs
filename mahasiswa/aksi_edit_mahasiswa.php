<?php
$id=$_POST['id'];
$nim=$_POST['nim'];
$nama_mhs=$_POST['nama_mhs'];
$jk=$_POST['jk'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];

include("../koneksi.php");

$sql="UPDATE tb_mahasiswa SET nim='$nim',nama_mhs='$nama_mhs',jk='$jk',alamat='$alamat',no_hp='$no_hp' WHERE id='$id'";

$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index.php?hal=mahasiswa&pesan=berhasil_edit");
}else{
	header("location:../index.php?hal=mahasiswa&pesan=gagal_edit");
	echo mysqli_error($mysqli);
	echo "$sql";
}


