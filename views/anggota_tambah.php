<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Anggota</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">

						 <div class="form-group">
                            <label for="nomor_anggota" class="col-sm-3 control-label">Nomor Anggota</label>
                            <div class="col-sm-9">
                                <input type="text" name="nomor_anggota"class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Anggota" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama_anggota" class="col-sm-3 control-label">Nama Anggota</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_anggota" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Anggota" required>
                            </div>
                        </div>
                        

                         <div class="form-group">
                            <label for="ttl" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" name="ttl" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Lahir" required>
                            </div>
                        </div>

						
						<div class="form-group">
                            <label for="kelas" class="col-sm-3 control-label">Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="kelas" class="form-control" id="inputPassword3" placeholder="Inputkan Kelas">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Anggota</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=anggota&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Anggota
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $nama_anggota=$_POST['nama_anggota'];
	$nomor_anggota=$_POST['nomor_anggota'];
  $ttl=$_POST['ttl'];
	$kelas=$_POST['kelas'];
    //buat sql
    $sql="INSERT INTO tbl_anggota VALUES ('','$nomor_anggota','$nama_anggota','$ttl','$kelas')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan anggota Error");
    if ($query){
        echo "<script>window.location.assign('?page=anggota&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
