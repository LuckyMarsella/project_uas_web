<?php
	

	$nis = $_GET['id'];

	$sql = $koneksi->query("select * from tb_anggota where nis = '$nis'");

	$tampil = $sql->fetch_assoc();

    $jkl = $tampil['jk'];
    $kelas = $tampil['kelas'];


?>

<div class="panel panel-default">
<div class="panel-heading">
		Ubah Data
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" >
                <div class="form-group">
                    <label>NIS</label>
                    <input class="form-control" name="nis" value="<?php echo $tampil['nis']?>" readonly/>
                    
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name="nama" value="<?php echo $tampil['nama']?>"/>
                    
                </div>

                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control" name="tmpt_lahir" value="<?php echo $tampil['tempat_lahir']?>" />
                    
                </div>

                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" type="date" name="tgl_lahir" value="<?php echo $tampil['tgl_lahir']?>"  />
                    
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label><br/>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="l" name="jk" <?php echo($jkl== 'L' )?"checked":"";?> /> Laki-laki
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="p" name="jk" <?php echo($jkl== 'P' )?"checked":"";?> /> Perempuan
                    </label>
                    
                    
                </div>

                <div class="form-group">
                <label> Kelas</label>
                <select class="form-control" name="kelas">
                    <option value="SI" <?php if ($kelas=='SI') {echo "selected";} ?>>SI</option>
                    <option value="TI"<?php if ($kelas=='TI') {echo "selected";} ?>>TI</option>
                    <option value="MI"<?php if ($kelas=='MI') {echo "selected";} ?>>MI</option>
                    <option value="MK" <?php if ($kelas=='MK') {echo "selected";} ?>>MK</option>
                </select>
                </div>
                
                <div>
                	
                	<input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
                </div>
         </div>

         </form>
      </div>
</div>  
 </div>  
 </div>


 <?php

 	$nis = $_POST ['nis'];
 	$nama = $_POST ['nama'];
 	$tmpt_lahir = $_POST ['tmpt_lahir'];
 	$tgl_lahir = $_POST ['tgl_lahir'];
 	$jk = $_POST ['jk'];
 	$kelas = $_POST ['kelas'];
 	
 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
 		
 		$sql = $koneksi->query("update  tb_anggota set nama='$nama', tempat_lahir='$tmpt_lahir', tgl_lahir='$tgl_lahir', jk='$jk', kelas='$kelas' where nis='$nis' ");
 		if ($sql) {
 			?>
 				<script type="text/javascript">
 					
 					alert ("Data Berhasil Disimpan");
 					window.location.href="?page=anggota";

 				</script>
 			<?php
 		}
 	}

 ?>
                             
                             

