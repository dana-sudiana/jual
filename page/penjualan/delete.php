<?php
	$kode = $_GET['id'];
	$sql = $koneksi->query("delete from tb_podaily where kode_penjualan='$kode'");
?>

<script type="text/javascript">
					alert("Data Berhasil di Hapus");
					window.location.href="?page=penjualan";
</script> 