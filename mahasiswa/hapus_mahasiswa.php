<?php
include("../koneksi.php");
$sql="DELETE FROM tb_mahasiswa WHERE id='$_GET[id]'";
$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index.php?hal=mahasiswa&pesan=berhasil_hapus");
}else{
	header("location:../index.php?hal=mahasiswa&pesan=gagal_hapus");
	echo mysqli_error($mysqli);
	echo "$sql";
}
?>