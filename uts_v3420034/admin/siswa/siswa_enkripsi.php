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

        <!-- /.box -->
        <table>
          <th>
            <tr>
              <div class="box">
                <div class="box-header">
                  <a href="index.php?hal=siswa">
                    <input type="button" value="Tampilkan Data Asli" class="btn btn-primary" name="">
                  </a>
                </div>
            </tr>
            <tr>
              <div class="box-header">
                <a href="index.php?hal=tambah_siswa">
                  <input type="button" value="Tambah" class="btn btn-primary" name="">
                </a>
              </div>
            </tr>
          </th>
        </table>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No HP</th>
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
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['jenkel']?></td>
                <td><?php echo $row['alamat2']?></td>
                <td><?php 
                
$key=12;

for ($i=0; $i < strlen($row['no_hp']); $i++) {
    $kode[$i]=ord($row['no_hp'][$i]); //rubah ASCII ke desimal
    $b[$i]=($kode[$i] + $key) % 256; //proses enkripsi
    $c[$i]=chr($b[$i]); //rubah desimal ke ASCII
}
for ($i=0; $i < strlen($row['no_hp']); $i++) {
    echo $c[$i];
}?></td>

                <td><a href="index.php?hal=edit_siswa&id=<?php echo $row['id']?>"><button type="button"
                      class="btn btn-warning" name=""> <i class="fa fa-pencil"></i> Edit</button></a>
                  <a onclick="return confirm('Anda Yakin...?')" href="siswa/hapus_siswa.php?id=<?php echo $row['id']?>">
                    <button type="button" class="btn btn-danger" name=""> <i class="fa fa-trash"></i>
                      Hapus</button></a>
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