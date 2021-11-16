<?php 
  $kode = $_GET['id'];
  $sql = $koneksi->query("select * from tb_podaily where kode_penjualan='$kode'");
  $tampil = $sql->fetch_assoc();

?>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit penjualan
                                
                            </h2>
          </div>
          <div class="body">
                        <form method="POST">

                            <label for="">Tanggal</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="tanggal" value="<?php echo $tampil['tanggal']?>" class="form-control" />
                                </div>
                            </div>

                            <label for="">Nama PO</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nama_po" value="<?php echo $tampil['nama_po']?>" class="form-control" />
                                </div>
                            </div>
                            <label for="">Nama Toko</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nama_toko" value="<?php echo $tampil['nama_toko']?>" class="form-control" />
                                </div>
                            </div>
                             <label for="">item_list</label>
                              <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  name="item_list" value="<?php echo $tampil['item_list']?>" class="form-control" />
                                </div>
                            </div>
                             <label for="">QTY</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="qty" value="<?php echo $tampil['qty']?>" class="form-control" />
                                </div>
                            </div>  
                            <label for="">Unit</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="unit" value="<?php echo $tampil['unit']?>" class="form-control" />
                                </div>
                            </div>  

                            <label for="">harga</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="harga" maxlength="12" value="<?php echo $harga['harga']?>" class="form-control" />
                                </div>
                            </div>
                         

                              <label for="">jml tagihan</label>
                              <div class="form-group">
                                  <div class="form-line">
                                      <input type="text"  name="jml_tag" value="<?php echo $tampil['jml_tag']?>" class="form-control" />
                                  </div>
                              </div>
                          <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">

                        </form>

           <?php 

            if (isset($_POST['simpan'])) {
              $tanggal = $_POST['tanggal'];
              $nama_po = $_POST['nama_po'];
              $nama_toko = $_POST['nama_toko'];
              $item_list = $_POST['item_list'];
              $qty = $_POST['qty'];
              $unit = $_POST['unit'];
              $harga = $_POST['harga'];
              $jml_tag = $_POST['jml_tag'];
            

            $sql = $koneksi->query("update  tb_podaily  set tanggal='$tanggal',nama_po='$nama_po',nama_toko='$nama_toko',item_list='$item_list',qty='$qty',unit='$unit',harga='$harga',jml_tag='$jml_tag' where kode_penjualan='$kode'");

            if ($sql) {
              ?>

              <script type="text/javascript">
                alert("Data Berhasil di Edit");
                window.location.href="?page=penjualan";
              </script>


              <?php
            }
    }
     ?>