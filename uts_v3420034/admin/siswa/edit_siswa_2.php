<div class="content-wrapper" style="min-height: 956px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            EDIT DATA SISWA
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
        </ol>
    </section>
    <?php
include ("koneksi.php");
$sql="select * from tbl_siswa where id='$_GET[id]' ";
$query=mysqli_query($mysqli, $sql);
$row=mysqli_fetch_array($query);
$key=12;


?>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form edit data siswa</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="siswa/edit_siswa.php" method="POST">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" placeholder="Enter Nama" name="nama"
                                    value="<?php echo $row['nama'];?>">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jenkel" class="form-control">
                                    <option value="Laki-Laki" <?php echo $row['jenkel']=='Laki-laki'? 'selected':'';?>>
                                        Laki-Laki
                                    </option>
                                    <option value="Perempuan" <?php echo $row['jenkel']=='Perempuan'? 'selected':'';?>>
                                        Perempuan
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat"><?php echo $row['alamat'];?></textarea>
                            </div>
                            <div class="form-group">
                                <label>No. HP</label>
                                <input class="form-control" name="no_hp" value="<?php 
    
    for($i=0; $i<strlen($row['no_hp2']); $i++) {
        $kode[$i]=ord($row['no_hp2'][$i]); // rubah ASII ke desimal
        $b[$i]=($kode[$i] - $key) % 256; // proses dekripsi Caesar
        $c[$i]=chr($b[$i]); //rubah desimal ke ASCII
    }
    for ($i=0; $i<strlen($row['no_hp2']); $i++) {
        echo $c[$i];
    };
    ?>">
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                        </div>
                    </form>
                    <div class="box-footer">
                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                        <a href="index.php?hal=edit_siswa&id=<?php echo $row['id']?><button type=" submit"
                            onclick="window.location.href='siswa/edit_siswa.php'" class="btn btn-primary">Lihat Data
                            Enkripsi</button></a>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->

            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>