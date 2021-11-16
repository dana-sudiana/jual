<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA LAPORAN PEMBELIAN BARANG
                            </h2>
                            
                        </div>
                         <div class="body">
                        <form method="post" action="page/laporan_pembelian/cetak.php" target="_blank" >
                            <table>
                                    <div ><br>
                                        <label>Bulan :</label>
                                        <select name="bulan" class="number_format">
                                            <option value="">Pilih</option>
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                            <input type="submit" name="cetak" value="cetak" class="btn btn-primary" >        
                                   </div>
                                </table>

                        </form>
                    </div>

                        <div class="body">
                             
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">

                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>TANGGAL</th>
                                            <th>NO FAKTUR</th>
                                            <th>NAMA SUPLIER</th>
                                            <th>NAMA BARANG</th>
                                            <th>STOK</th>

                                            <th></th>
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
                                            <td><?php echo $data['tanggal']?></td>
                                            <td><?php echo $data['nofaktur']?></td>
                                            <td><?php echo $data['nama_supplier']?></td>
                                            <td><?php echo $data['nama_barang']?></td>
                                            <td><?php echo $data['stok']?></td>


                                        </tr>
                                        <?php 
                                       
                                    } ?>
                                    </tbody>
                                    
                                </table>
                               
                            </div>