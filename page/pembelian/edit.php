<?php 
  $kode = $_GET['id'];
  $sql = $koneksi->query("select * from tb_pembelian where kode_pembelian='$kode'");
  $tampil = $sql->fetch_assoc();

?>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit pembelian
                                
                            </h2>
          </div>
          <div class="body">
                        <form method="POST">

                  <label for="">Nomer Faktur</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nofaktur" value="<?php echo $tampil['nofaktur']?>" class="form-control" />
                                </div>
                            </div>

                            <label for="">Nama Supplier</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nama_supplier" value="<?php echo $tampil['nama_supplier']?>" class="form-control" />
                                </div>
                            </div>
                             <label for="">Nama Barang</label>
                              <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  name="nama_barang" value="<?php echo $tampil['nama_barang']?>" class="form-control" />
                                </div>
                            </div>
                             <label for="">Tanggal</label>
                              <div class="form-group">
                                  <div class="form-line">
                                      <input type="text"  name="tanggal" value="<?php echo $tampil['tanggal']?>" class="form-control" />
                                  </div>
                              </div>

                            

                              <label for="">Stok</label>
                              <div class="form-group">
                                  <div class="form-line">
                                      <input type="text"  name="stok" value="<?php echo $tampil['stok']?>" class="form-control" />
                                  </div>
                              </div>

                             



                           <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">

                        </form>

           <?php 

            if (isset($_POST['simpan'])) {
              $nofaktur = $_POST['nofaktur'];
              $nama_supplier = $_POST['nama_supplier'];
              $nama_barang = $_POST['nama_barang'];
              $tanggal = $_POST['tanggal'];
              $stok = $_POST['stok'];
            

            $sql = $koneksi->query("update  tb_pembelian  set nofaktur='$nofaktur',nama_supplier='$nama_supplier',nama_barang='$nama_barang',tanggal='$tanggal',stok='$stok' where kode_pembelian='$kode'");

            if ($sql) {
              ?>

              <script type="text/javascript">
                alert("Data Berhasil di Edit");
                window.location.href="?page=pembelian";
              </script>


              <?php
            }
    }
     ?>