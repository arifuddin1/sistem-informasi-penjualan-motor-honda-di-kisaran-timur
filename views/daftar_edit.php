<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_jual WHERE idjual ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Penjualan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                        <div class="form-group">
                            <label for="idjual" class="col-sm-3 control-label">Id Penjualan</label>
                            <div class="col-sm-9">
                                <input type="text" name="idjual" value="<?=$data['idjual']?>"class="form-control" id="inputEmail3" placeholder="Id Penjualan">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nomesin" class="col-sm-3 control-label">No Mesin</label>
                            <div class="col-sm-9">
                                <input type="text" name="nomesin" value="<?=$data['nomesin']?>"class="form-control" id="inputEmail3" placeholder="No Mesin">
                            </div>
						<div class="form-group">
                            <label for="jenismotor" class="col-sm-3 control-label">Jenis Motor</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenismotor" value="<?=$data['jenismotor']?>"class="form-control" id="inputEmail3" placeholder="Jenis Motor">
                            </div>
                        </div>
						
                        </div>
						<div class="form-group">
                            <label for="tanggalpembelian" class="col-sm-3 control-label">Tanggal Pembelian</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggalpembelian" value="<?=$data['tanggalpembelian']?>"class="form-control" id="inputEmail3" placeholder="Tanggal Pembelian">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" value="<?=$data['keterangan']?>"class="form-control" id="inputEmail3" placeholder="Keterangan" >
                            </div>
                        </div>
						
                        
                       
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Penjualan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=daftar&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Penjualan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
      $idjual=$_POST['idjual'];
	$nomesin=$_POST['nomesin'];
	$jenismotor=$_POST['jenismotor'];
	$tanggalpembelian=$_POST['tanggalpembelian'];
  $keterangan=$_POST['keterangan'];
    //buat sql
    $sql="UPDATE tbl_jual SET idjual='$idjual',nomesin='$nomesin',jenismotor='$jenismotor',tanggalpembelian='$tanggalpembelian',keterangan='$keterangan' WHERE idjual ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=daftar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



