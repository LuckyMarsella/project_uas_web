<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Denda
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <br>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <th>Denda / Hari</th>
                                            <th width="19%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                        $no = 1;

                                        $sql = $koneksi->query("select * from tb_denda");

                                        while ($data= $sql->fetch_assoc()) {

                                    ?>

                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['denda'];?></td>
                                        <td>
                                            <a href="?page=denda&aksi=ubah&no_denda=<?php echo $data['no_denda']; ?>" class="btn btn-info" ><i class="fa fa-edit"></i> Ubah</a>
                                            
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

     