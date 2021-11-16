<?php
	$kode = $_GET['id'];
	$sql = $koneksi->query("delete from tb_pembelian where kode_pembelian='$kode'");
?>

<script type="text/javascript">
					alert("Data Berhasil di Hapus");
					window.location.href="?page=pembelian";
</script> 