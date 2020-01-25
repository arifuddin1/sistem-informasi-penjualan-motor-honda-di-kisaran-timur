<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Penjualan Motor</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                        </div>
						 <div class="form-group">
                            <label for="idjual" class="col-sm-3 control-label">Id Penjualan</label>
                            <div class="col-sm-9">
                                <input type="text" name="idjual" class="form-control" id="inputEmail3" placeholder="Inputkan Id Penjualan" required>
                            </div>
                        </div>
						 
						 <div class="form-group">
                            <label for="nomesin" class="col-sm-3 control-label">No Mesin</label>
                            <div class="col-sm-9">
                                <input type="text" name="nomesin" class="form-control" id="inputEmail3" placeholder="Inputkan No Mesin" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="jenismotor" class="col-sm-3 control-label">Jenis Motor</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenismotor" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Motor" required>
                            </div>
							 <div class="form-group">
                            <label for="tanggalpembelian" class="col-sm-3 control-label">Tanggal Pembelian</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggalpembelian" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Pembelian" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" class="form-control" id="inputEmail3" placeholder="Inputkan Keterangan" required>
                            </div>
                        </div>
                        </div>
                        

                       
                        </div>
						
                     

 

                       
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
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
    $sql="INSERT INTO tbl_jual (idjual,nomesin,jenismotor,tanggalpembelian,keterangan) VALUES ('$idjual','$nomesin','$jenismotor','$tanggalpembelian','$keterangan')";
    $query=mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Penjualan Error");
    if ($query){
        echo "<script>window.location.assign('?page=daftar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
