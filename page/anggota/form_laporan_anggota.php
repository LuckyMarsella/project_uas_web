<div class="panel panel-default">
<div class="panel-heading">
	<center>
 
		<h2>DATA LAPORAN ANGGOTA</h2>
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
			<th>NIM</th>
			<th>Nama Anggota</th>
			<th>Tempat Lahir </th>
			<th>Tanggal Lahir </th>
			<th>Jenis Kelamin </th>
			<th>Prodi </th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tb_anggota");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nis']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['tempat_lahir']; ?></td>
			<td><?php echo $data['tgl_lahir']; ?></td>
			<td><?php echo $data['jk']; ?></td>
			<td><?php echo $data['kelas']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<div>
        <a href="./laporan/laporan_anggota.php" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-print"></i> Cetak to PDF </a>
    </div><br>
 
</body>
</html>













