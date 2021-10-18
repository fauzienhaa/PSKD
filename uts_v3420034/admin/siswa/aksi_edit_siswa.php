<?php
$id=$_POST['id'];
$nama=$_POST['nama'];
$jenkel=$_POST['jenkel'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];

include("../koneksi.php");

$sql="UPDATE tbl_siswa SET 
nama='$nama',
jenkel='$jenkel',
alamat='$alamat',
no_hp='$no_hp' WHERE id='$id'";

$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index.php?hal=siswa&pesan=berhasil_edit");
}else{
	header("location:../index.php?hal=siswa&pesan=gagal_edit");
	echo mysqli_error();
	echo "$sql";
}


