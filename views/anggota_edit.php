<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_anggota WHERE id_anggota='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Anggota</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nomor_anggota" class="col-sm-3 control-label">Nomor Anggota</label>
                             <div class="col-sm-9">
								<input type="text" name="nomor_anggota" value="<?=$data['nomor_anggota']?>"class="form-control" id="inputEmail3" placeholder="Input Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_anggota" class="col-sm-3 control-label">Nama Anggota</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_anggota" value="<?=$data['nama_anggota']?>"class="form-control" id="inputEmail3" placeholder="Input Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ttl" class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="ttl" value="<?=$data['ttl']?>" class="form-control" id="inputPassword3" placeholder="Input Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kelas" class="col-sm-3 control-label">Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="kelas" value="<?=$data['kelas']?>" class="form-control" id="inputPassword3" placeholder="Input Keterangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Anggota</button>
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
    $nomor_anggota=$_POST['nomor_anggota'];
	  $nama_anggota=$_POST['nama_anggota'];
		$ttl =$_POST['ttl'];
		$kelas =$_POST['kelas'];
    //buat sql
    $sql="UPDATE tbl_anggota SET nomor_anggota='$nomor_anggota',nama_anggota='$nama_anggota' , ttl='$ttl',
	       kelas='$kelas' WHERE id_anggota='$id'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Data Buku Error");
    if ($query){
        echo "<script>window.location.assign('?page=anggota&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>
