<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA PENJUALAN BARANG
                            </h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Nomer PO</th>
                                            <th>Nama Toko</th>
                                            <th>Item List</th>
                                            <th>qty</th>
                                            <th>unit</th>
                                            <th>Harga</th>
                                            <th>JML Tagihan</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                            $no = 1;

                                            $sql = $koneksi->query("select * from tb_podaily");

                                            while ($data = $sql->fetch_assoc()) {
                                                
                                            
                                        ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['tanggal']?></td>
                                            <td><?php echo $data['nama_po']?></td>
                                            <td><?php echo $data['nama_toko']?></td>
                                            <td><?php echo $data['item_list']?></td>
                                            <td><?php echo $data['qty']?></td>
                                            <td><?php echo $data['unit']?></td>
                                            <td><?php echo $data['harga']?></td>
                                            <td><?php echo $data['jml_tag']?></td>
                                            
                                          
                                            <td>
                                                
                                                <a href="?page=penjualan&aksi=edit&id=<?php echo $data['kode_penjualan']?>" class="btn btn-success" >Edit</a>
                                                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini !')" href="?page=penjualan&aksi=delete&id=<?php echo $data['kode_penjualan']?>" class="btn btn-danger" >Delete</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <a href="?page=penjualan&aksi=tambah" class="btn btn-primary">Tambah Data </a>
                            </div>