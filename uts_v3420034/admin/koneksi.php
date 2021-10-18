<?php
$mysqli=mysqli_connect("localhost","root","","db_siswa");
mysqli_select_db($mysqli,"db_siswa") or die("Gagal terhubung ke database");
?>