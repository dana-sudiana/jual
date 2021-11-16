<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA LAPORAN PEMBELIAN
                            </h2>
                            
                        </div>

                        <div class="body">
                             
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">

                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No. Faktur</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                    	   <?php
                                             $no = 1;
                                           $sql = $koneksi->query("select * from tb_pembelian");

                                            while ($data = $sql->fetch_assoc()) { 

                                            
                                            
                                            ?>
                                         <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['nofaktur']?></td>
                                            <td><?php echo $data['tanggal']?></td>
                                            <td>
                                                <a href="?page=laporan_pembelian&aksi=view&nofaktur=<?php echo $data['nofaktur']?>" class="btn btn-success" ><i class="fa fa-eye" aria-hidden="true" style="border-radius: 5px"></i> View Detail</a>
                                            </td>

                                            
                                        </tr>
                                    	<?php 
                                       
                                    } ?>
                                    </tbody>
                                   
                                </table>
                               
                            </div>