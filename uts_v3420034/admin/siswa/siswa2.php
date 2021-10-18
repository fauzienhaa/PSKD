
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Siswa</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
                    <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan']=='berhasil_tambah') {
                  echo "
                        <div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                        <i class='icon fa fa-check'></i> Tambah Data Berhasil..!
                        </div>
                        ";
                }
                if ($_GET['pesan']=='gagal_tambah') {
                  echo "
                        <div class='alert alert-danger alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                        <i class='icon fa fa-check'></i> Tambah Data Gagal..!
                        </div>
                        ";
                }
                if ($_GET['pesan']=='berhasil_edit') {
                  echo "
                        <div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                        <i class='icon fa fa-check'></i> Edit Data Berhasil..!
                        </div>
                        ";
                }
                if ($_GET['pesan']=='gagal_edit') {
                  echo "
                        <div class='alert alert-danger alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                        <i class='icon fa fa-check'></i> Edit Data Gagal..!
                        </div>
                        ";
                }
                 if ($_GET['pesan']=='berhasil_hapus') {
                  echo "
                        <div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                        <i class='icon fa fa-check'></i> Hapus Data Berhasil..!
                        </div>
                        ";
                }
                if ($_GET['pesan']=='gagal_hapus') {
                  echo "
                        <div class='alert alert-denger alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                        <i class='icon fa fa-check'></i> Hapus Data Gagal..!
                        </div>
                        ";
                }
            }
          ?>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <a href="index.php?hal=tambah_siswa">
              <input type="button" value="Tambah" class="btn btn-primary" name="">
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
<?php
include "koneksi.php";
$hasil=mysqli_query($mysqli,"select * from tbl_siswa");
$no=1;
while($row=mysqli_fetch_array($hasil)){
?>
                <tr>
                  <td><?php echo $no; $no++;?></td>
                  <td><?php echo $row['nis']?></td>
                  <td><?php echo $row['nama']?></td>
                  <td><?php echo $row['alamat']?></td>
                  <td><?php if($row['jenis_kelamin']=='L'){ echo "Laki-laki";} else{ echo "Perempuan";}?></td>
                  <td><?php echo $row['agama']?></td>
                  <td><a href="index.php?hal=edit_siswa&nis=<?php echo $row['nis']?>"><button type="button" class="btn btn-warning" name=""> <i class="fa fa-pencil"></i> Edit</button></a>
                    <a onclick="return confirm('Anda Yakin...?')" href="siswa/hapus_siswa.php?nis=<?php echo $row['nis']?>">
                    <button type="button" class="btn btn-danger" name=""> <i class="fa fa-trash"></i> Hapus</button></a>
                  </td>
                </tr>
<?php } ?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>