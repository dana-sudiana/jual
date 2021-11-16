
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah Konsumen
                                
                            </h2>
					</div>
					<div class="body">
              <form method="POST">

         					<label for="">Nama Toko</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nama" class="form-control" />
                                </div>
                            </div>

                            <label for="">Alamat</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="alamat" class="form-control" />
                                </div>
                            </div>
                            <label for="">Alamat Kecamatan</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  name="alamat_kecamatan"  class="form-control" />
                                </div>
                            </div>


                            <label for="">Telpon</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="telpon" maxlength="12" class="form-control" />
                                </div>
                            </div>
                         

                            <label for="">ID Store</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  name="email"  class="form-control" />
                                </div>
                            </div>

                            

                           <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">

                        </form>

           <?php 

           	if (isset($_POST['simpan'])) {
           		$nama = $_POST['nama'];
           		$alamat = $_POST['alamat'];
              $alamat_kecamatan = $_POST['alamat_kecamatan'];
           		$telpon = $_POST['telpon'];
           		$email = $_POST['email'];
           	

           	$sql = $koneksi->query("insert into tb_konsumen (nama,alamat,alamat_kecamatan,telpon,email) values('$nama','$alamat','$alamat_kecamatan','$telpon','$email')");

           	if ($sql) {
           		?>

           		<script type="text/javascript">
           			alert("Data Berhasil di Simpan");
           			window.location.href="?page=konsumen";
           		</script>


           		<?php
           	}
		}
     ?>