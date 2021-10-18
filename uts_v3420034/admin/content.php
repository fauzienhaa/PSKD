
<?php
include ("koneksi.php");
    if (isset($_GET['hal'])) {

        if ($_GET['hal']=='siswa') {
          include "siswa/siswa.php";
        }
        elseif ($_GET['hal']=='tambah_siswa') {
          include "siswa/tambah_siswa.php";
        }
        elseif ($_GET['hal']=='siswa_enkripsi') {
          include "siswa/siswa_enkripsi.php";
        }
        elseif ($_GET['hal']=='edit_siswa') {
          include "siswa/edit_siswa.php";
        }
        elseif ($_GET['hal']=='edit_siswa_2') {
          include "siswa/edit_siswa_2.php";
        }
        else
        {
          include "home.php";
        }
    }else{
    include "home.php";
    }
?>