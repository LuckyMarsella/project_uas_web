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
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tb_Transaksi");
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
                       
                        	
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>













