<?php
//session_start();
//ob_start();
include_once("../../koneksi.php"); 
?>
<html>
<head>
  <title>LAPORAN  PEMBELIAN</title>
</head>
<body>
 
  <center>
 
    <h2>LAPORAN PEMBELIAN</h2>
    
  </center>
 <?php
            $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
            echo '<b>Data Transaksi Bulan '.$nama_bulan[$_POST['bulan']].' </b><br /><br />';

            ?>
 
 
  <table border="1" style="width: 100%">
    <tr>
      <th width="1%">No</th>
      <th>Tanggal</th>
      <th>No Faktur</th>
      <th>Supplier</th>
      <th>nama_barang</th>
      <th>Stok</th>
    </tr>
      <?php
       $no = 1;

       $sql = $koneksi->query("SELECT * from tb_pembelian WHERE MONTH(tanggal)='$_POST[bulan]' ");

      while ($data = $sql->fetch_assoc()) {
        
      
      ?>
       <tr>
          <td><?php echo $no++;?></td>
           <td><?php echo $data['tanggal']?></td>
          <td><?php echo $data['nofaktur']?></td>
          <td><?php echo $data['nama_supplier']?></td>
          <td><?php echo $data['nama_barang']?></td>
          <td align="center"><?php echo $data['stok']?></td>


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
  <center>
    <a target="_blank" href="export.php">EXPORT KE EXCEL</a>
  </center>
 
</body>
</html>


