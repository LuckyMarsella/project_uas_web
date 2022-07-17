<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Data Transaksi Denda
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Terlambat</th>
                        <th>Denda</th>
                        <th width="21%">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                        $no = 1;

                        $sql = $koneksi->query("select * from tb_transaksi where status='pinjam' ");

                        while ($data= $sql->fetch_assoc()) {

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
                    
                        <td>
                        	<?php
                        	//$denda = 1000;

                        	$tanggal_dateline = $data['tgl_kembali'];

                        	$tgl_kembali=date('Y-m-d');

                        	$lambat = terlambat($tanggal_dateline, $tgl_kembali);

                        	//$denda2 = $lambat*$denda1;

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
                    
                        
                        <td>
                            <a href="?page=transaksi_denda&aksi=kembali&id=<?php echo $data['id']; ?>&judul=<?php echo $data['judul']?>" class="btn btn-danger" >Bayar dan Kembali</a>
                        </td>
                    </tr>
                    <?php  } ?>
                </tbody>
                </table>
              </div>
    </div>
</div>
</div>
</div>                          