<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Penjualan </title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>SISTEM INFORMASI PENJUALAN MOTOR HONDA KISARAN</h2>
                        <h4>Jl. Prof HM. Yamin, No 3, Kedai Ledang Kisaran Naga, Kisaran Kota<br>Kecamatan Kisaran Timur,  Kabupaten Asahan, Sumatera Utara, Kode Pos : 21222</h4>
                        <hr>
                        <h3>SELURUH DATA PENJUALAN</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								 <tr>
                                <th>No.</th><th>Id Penjualan</th><th>No Mesin</th><th>Jenis Motor</th><th>Tanggal Pembelian</th><th>Keterangan</th>
                            </tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_jual";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['idjual'] ?></td>
                                    <td><?= $data['nomesin'] ?></td>
                                    <td><?= $data['jenismotor'] ?></td>
                                    <td><?= $data['tanggalpembelian'] ?></td>
                                    <td><?= $data['keterangan'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Air Joman  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u><strong>PIC Dealer</u><br>
                                        ID FLP: 235069
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>