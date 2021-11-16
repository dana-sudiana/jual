
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah PODAILY
                                
                            </h2>
          </div>
          <div class="body">
              <form method="POST">

                  <label for="">tanggal</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="tanggal" class="form-control" />
                                </div>
                            </div>

                            <label for="">nama_po</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nama_po" class="form-control" />
                                </div>
                            </div>
                            <label for="">Nama Toko</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  name="nama_toko"  class="form-control" />
                                </div>
                            </div>
                            <label for="">item_list</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  name="item_list"  class="form-control" />
                                </div>
                            </div>

                         

                            <label for="">unit</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  name="unit"  class="form-control" />
                                </div>
                            </div>

                            

                           <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">

                        </form>

           <?php 

            if (isset($_POST['simpan'])) {
              $tanggal = $_POST['tanggal'];
              $nama_po = $_POST['nama_po'];
              $nama_toko = $_POST['nama_toko'];
              $Item_list = $_POST['item_list'];
              $unit = $_POST['unit'];
            

            $sql = $koneksi->query("insert into tb_podaily (tanggal,nama_po,nama_toko,item_list,unit) values('$tanggal','$nama_po','$nama_toko','$item_list','$unit')");

            if ($sql) {
              ?>

              <script type="text/javascript">
                alert("Data Berhasil di Simpan");
                window.location.href="?page=penjualan";
              </script>


              <?php
            }
    }
     ?>