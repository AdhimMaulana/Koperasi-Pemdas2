<?php
$martproduk = array (
   array("Produk 1", "Pulpen",4000,'pulpen.jpeg'),
   array("Produk 2 ", "Pensil",2000,'pensil.jpeg'),
   array("Produk 3", "Penghapus",3000,'penghapus.jpg'),
   array("Produk 4","Tip X",7000,'tipx.jpg')
   );
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="homey.css">
</head>
<body>

<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="">Transaksi</a></li>
  <li style="float:right"><a class="" href="index.php">LogOut</a></li>
</ul>
<img src="homemart.jpg" alt="home" class="homecenter">
<h2>Daftar Produk SchoolMart</h2>
<div class ="container">
<div class="a1-container">
<img src="<?php echo $martproduk[0][3];?>" class="home1">
   <p> <?php echo  $martproduk[0][0]."<br> ".$martproduk[0][1]."<br>"."<br>"."Rp ".$martproduk[0][2]."<br>";?>
</p>
</div>
<div class="a2-container">
<img src="<?php echo $martproduk[1][3];?>" class="home2">
   <p><?php echo $martproduk[1][0]."<br> ".$martproduk[1][1]."<br>"."<br>"."Rp ".$martproduk[1][2]."<br>";?>
</p>
</div>

<div class="a3-container">
<img src="<?php echo $martproduk[2][3];?>" class="home3">
   <p><?php echo $martproduk[2][0]."<br> ".$martproduk[2][1]."<br>"."<br>"."Rp ".$martproduk[2][2]."<br>";?>
</p>
</div>
<div class="a4-container">
<img src="<?php echo $martproduk[3][3];?>" class="home4">
   <p><?php echo $martproduk[3][0]."<br> ".$martproduk[3][1]."<br>"."<br>"."Rp ".$martproduk[3][2]."<br>";?>
</p>
</div>
</div>
<div class="button1">
   <p><a href ="transaksi.php?produk=<?= $martproduk[0][0]?>&harga=<?= $martproduk[0][2]?>">PILIH PRODUK</a>
</div>
<div class="button2">
   <p><a href ="transaksi.php?produk=<?= $martproduk[1][0]?>&harga=<?= $martproduk[1][2]?>">PILIH PRODUK</a>
</div>
<div class="button3">
   <p><a href ="transaksi.php?produk=<?= $martproduk[2][0]?>&harga=<?= $martproduk[2][2]?>">PILIH PRODUK</a>
</div>
<div class="button4">
   <p><a href ="transaksi.php?produk=<?= $martproduk[3][0]?>&harga=<?= $martproduk[3][2]?>">PILIH PRODUK</a>
</div>
</body>
<div class="footer"><p align="center">Copyright ©Adhim Maulana</a></p>
</div>
</html>
