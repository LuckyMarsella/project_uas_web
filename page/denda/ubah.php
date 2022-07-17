<?php

	$no_denda = $_GET['no_denda'];

	$sql = $koneksi->query("select * from tb_denda where no_denda='$no_denda'");

	$tampil = $sql->fetch_assoc();
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
                    <label>Denda / Hari</label>
                    <input class="form-control" name="denda" value="<?php echo $tampil['denda'];?>" />
                    
                </div>

                <div>
                	
                	<input type="submit" name="simpan" value="Ubah" class="btn btn-success">
                </div>
         </div>

         </form>
      </div>
 </div>  
 </div>  
 </div>


 <?php

 	$denda = $_POST ['denda'];
 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
 		
 		$sql = $koneksi->query("update tb_denda set denda='$denda'");

 		if ($sql) {
 			?>
 				<script type="text/javascript">
 					
 					alert ("Ubah Berhasil Disimpan");
 					window.location.href="?page=denda";

 				</script>
 			<?php
 		}
 	}

 ?>
                             
                             

