<div class="panel panel-default">
<div class="panel-heading">
	<center>
 
		<h2>DATA LAPORAN BUKU</h2>
		<h4>Taman Baca Binagriya</h4>
 
	</center>
</div>
</div>
 
	<?php 
	$koneksi = new mysqli("localhost","root","","db_perpustakaan");
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>ISBN</th>
            <th>Jumlah</th>
            <th>Lokasi</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tb_buku");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['judul'];?></td>
            <td><?php echo $data['pengarang'];?></td>
            <td><?php echo $data['penerbit'];?></td>
            <td><?php echo $data['tahun_terbit'];?></td>
            <td><?php echo $data['isbn'];?></td>
            <td><?php echo $data['jumlah_buku'];?></td>
            <td><?php echo $data['lokasi'];?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<div>
        <a href="./laporan/laporan.php" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-print"></i> Cetak to PDF </a>
    </div><br>
 
</body>
</html>













