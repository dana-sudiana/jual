<!DOCTYPE html>
<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Po.xls");
?>

<?php
//session_start();
//ob_start();
include_once("../../koneksi.php"); 
?>

<?php
//session_start();
//ob_start();
include_once("../../koneksi.php"); 
?>

<html>
<head>
  <title>LAPORAN  PENJUALAN BARANG</title>
</head>
<body>
 
  <center>
 
    <h2>LAPORAN PENJUALAN BARANG</h2>
    
  </center>
 
 
 
  <table border="1" style="width: 100%">
    <tr>
      <th width="1%">No</th>
      <th>Tanggal</th>
      <th>No PODAILY</th>
      <th>NAMA TOKO</th>
      <th>NAMA BARANG</th>
      <th>STOK</th>
      <th>HARGA</th>
      <th>JML TAGIHAN</th>
    </tr>
      <?php
       $no = 1;

       $sql = $koneksi->query("SELECT * from tb_podaily  ");

      while ($data = $sql->fetch_assoc()) {
        
      
      ?>
       <tr>
          <td><?php echo $no++;?></td>
           <td><?php echo $data['tanggal']?></td>
          <td><?php echo $data['nama_po']?></td>
          <td><?php echo $data['nama_toko']?></td>
          <td><?php echo $data['item_list']?></td>
          <td align="center"><?php echo $data['qty']?></td>
          <td align="center"><?php echo $data['harga']?></td>
          <td align="center"><?php echo $data['jml_tag']?></td>

  </tr>
    <?php 
   
   
    } 
    ?>

    
  </table>
 <p><br>
  <div align="right" >Petugas </div><p></br>
  <div align="right">( ............... )</div>
  <script>
    window.print();
  </script>
  
 
</body>
</html>


