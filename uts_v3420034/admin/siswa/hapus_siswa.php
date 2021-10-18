<?php
include("../koneksi.php");
$sql="delete from tbl_siswa where id='$_GET[id]'";
$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index.php?hal=siswa&pesan=berhasil_hapus");
}else{
	header("location:../index.php?hal=siswa&pesan=gagal_hapus");
	echo mysqli_error();
	echo "$sql";
}
?>