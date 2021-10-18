<?php
include("../koneksi.php");

$nama=$_POST['nama'];
$jenkel=$_POST['jenkel'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];
$key=12;

for ($i=0; $i < strlen($no_hp); $i++) {
    $kode[$i]=ord($no_hp[$i]); //rubah ASCII ke desimal
    $b[$i]=($kode[$i] + $key) % 256; //proses enkripsi
    $c[$i]=chr($b[$i]); //rubah desimal ke ASCII
	$hsl=$hsl . $c[$i];
}

include "lib/lib.php";
$kunci = str_replace(" ", "", "fauzi");
$plain = str_replace(" ", "", $alamat);
$panjang_plain = strlen($plain);
$panjang_kunci = strlen($kunci);
$index_x = 0;
$index_y = 0;
$hasil_ciper = array();
$hasil_akhir = "";

while ($index_x < $panjang_plain) {
	$x = substr($plain, $index_x, 1);
	$y = substr($kunci, $index_y, 1);
	$hasil_ciper[$index_x] =
	$tabel_vigenere[huruf_ke_angka($x)][huruf_ke_angka($y)];
	$index_x++;
	$index_y++;
	if ($index_y == $panjang_kunci) {
		$index_y = 0;
	}
}

$i = 0;
while ($i < $index_x) {
$hasil_akhir .= $hasil_ciper[$i];
$i++;
}

$sql="insert into tbl_siswa(nama,jenkel,alamat,no_hp,no_hp2,alamat2) values
('$nama',
'$jenkel',
'$alamat',
'$no_hp',
'$hsl',
'$hasil_akhir')";

$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index.php?hal=siswa&pesan=berhasil_tambah");
}else{
	header("location:../index.php?hal=siswa&pesan=gagal_tambah");
	echo mysqli_error();
	echo "$sql";
}


