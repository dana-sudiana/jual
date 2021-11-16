<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA PEMBELIAN BARANG
                            </h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Faktur</th>
                                            <th>Nama_suplier</th>
                                            <th>Nama_Barang</th>
                                            <th>Tanggal</th>
                                            <th>Stok</th>
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
                                            <td><?php echo $data['nama_supplier']?></td>
                                            <td><?php echo $data['nama_barang']?></td>
                                            <td><?php echo $data['tanggal']?></td>
                                            <td><?php echo $data['stok']?></td>
                                            
                                          
                                            <td>
                                                
                                                <a href="?page=pembelian&aksi=edit&id=<?php echo $data['kode_pembelian']?>" class="btn btn-success" >Edit</a>
                                                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini !')" href="?page=pembelian&aksi=delete&id=<?php echo $data['kode_pembelian']?>" class="btn btn-danger" >Delete</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <a href="?page=pembelian&aksi=tambah" class="btn btn-primary">Tambah Data </a>
                            </div>