
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah pembelian
                                
                            </h2>
          </div>
          <div class="body">
              <form method="POST">

                  <label for="">Nomor Faktur</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nofaktur" class="form-control" />
                                </div>
                            </div>

                            <label for="">nama_supplier</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nama_supplier" class="form-control" />
                                </div>
                            </div>
                            <label for="">nama_barang</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  name="nama_barang"  class="form-control" />
                                </div>
                            </div>
                            <label for="">Tanggal</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  name="tanggal"  class="form-control" />
                                </div>
                            </div>

                         

                            <label for="">Stok</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  name="stok"  class="form-control" />
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
            

            $sql = $koneksi->query("insert into tb_pembelian (nofaktur,nama_supplier,nama_barang,tanggal,stok) values('$nofaktur','$nama_supplier','$nama_barang','$tanggal','$stok')");

            if ($sql) {
              ?>

              <script type="text/javascript">
                alert("Data Berhasil di Simpan");
                window.location.href="?page=pembelian";
              </script>


              <?php
            }
    }
     ?>