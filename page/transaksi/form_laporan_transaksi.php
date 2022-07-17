<div class="panel panel-default">
<div class="panel-heading">
	<center>
 
		<h2>DATA LAPORAN TRANSAKSI</h2>
		<h4>Taman Baca Binagriya</h4>
 
	</center>
</div>
</div>
 
	<?php 
	$koneksi = new mysqli("localhost","root","","db_perpustakaan");
	?>
 
	<table border="1" style="width: 100%">
		<tr>
        <th>No</th>
        <th>Judul</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Status</th>
        <th>Terlambat</th>
        <th>Denda</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tb_transaksi");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
                        <td><?php echo $no++; ?></td>
                        <td>
                            <?php 
                                $test = $data['id_buku'];
                                // echo $test;
                                $jbuku = $koneksi->query("SELECT * FROM tb_buku WHERE id_buku=$test");
                                $jjbuku = $jbuku->fetch_assoc();
                                echo $jjbuku['judul'];
                             ?>
                        </td>
                        <td>
                            <?php 
                                $anggota = $data['nis'];
                                // echo $test;
                                $anggotaa = $koneksi->query("SELECT * FROM tb_anggota WHERE nis=$anggota");
                                $show = $anggotaa->fetch_assoc();
                                echo $show['nis'];
                             ?>
                        </td>
                        <td><?php echo $show['nama'];;?></td>
                        <td><?php echo $data['tgl_pinjam'];?></td>
                        <td><?php echo $data['tgl_kembali'];?></td>
                        <td><?php echo $data['status'];?></td>
                        <td>
                        	<?php
                        	//$denda = 1000;

                        	$tanggal_dateline = $data['tgl_kembali'];

                        	$tgl_kembali=date('Y-m-d');

                        	$lambat = terlambat($tanggal_dateline, $tgl_kembali);

                        	//$denda1 = $lambat*$denda;

                        	if ($lambat>0) {
                        		echo "<font color='red'>$lambat hari </font>";
                        	}else{
                        		echo $lambat . "hari";
                        	}
                        	?>
                        </td>
                        <td>
                            <?php 
                               $tanggal_dateline = $data['tgl_kembali'];
                                $tgl_kembali=date('Y-m-d');
                                $lambat = terlambat($tanggal_dateline, $tgl_kembali);
                                $denda = $data['denda'];
                                $denda1 = $koneksi->query("SELECT * FROM tb_denda");
                                $show = $denda1->fetch_assoc();
                                echo $lambat*$show['denda'];
                             ?>
                        </td>
                        
                        
		</tr>
		<?php 
		}
		?>
	</table>
 
	<div>
        <a href="./laporan/laporan_transaksi.php" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-print"></i> Cetak to PDF </a>
    </div><br>
 
</body>
</html>













