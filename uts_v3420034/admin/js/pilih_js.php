<?php
    if (isset($_GET['hal'])) {

        if ($_GET['hal']=='siswa') {
          include "js/js_tabel.php";
        }
        elseif ($_GET['hal']=='tambah_siswa') {
          include "js/js2.php";
        }
        elseif ($_GET['hal']=='edit_siswa || edit_siswa_2') {
          include "js/js2.php";
        }
        else
        {
          include "js/js1.php";
        }

    }else{
    include "js/js1.php";
    }
?>