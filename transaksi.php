<?php
$produk = $_GET["produk"];
$harga = $_GET["harga"];
$pembayaran = "";

if (isset($_POST['totalkan'])){
  $total = $_POST['tambahan'] + $harga;
  header("location:transaksi.php?produk=$produk&harga=$harga&total=$total");
}
if (empty($_GET['total'])){
  $total = "";
} else {
  $total = $_GET['total'];
}

if (isset($_POST['kembalian'])){
  echo intval($total);
  echo intval($_POST['bayar']);
  $pembayaran =  intval($_POST['bayar']) - intval($total); 
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="transaksi.css">
</head>
<body>

<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="">Transaksi</a></li>
  <li style="float:right"><a class="" href="index.php">LogOut</a></li>
</ul>
<div class="container">
            <table>
                <form action="" method="POST">
                    <tr>
                        <td>No Transaksi</td>
                        <td> : </td>
                        <td><input type="text" name="no_transaksi" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>Tanggal Transaksi</td>
                        <td> : </td>
                        <td><input type="date" name="tanggal_transaksi" placeholder=""></td>
                        
                    </tr>
                    <tr>
                        <td>Nama Costumer</td>
                        <td> : </td>
                        <td><input type="text" name="nama_costumer" placeholder=""></td>
                        
                    </tr>
                    <tr>
                        <td>Pilihan Produk</td>
                        <td> : </td>
                        <td><input type="text" name="pilihan_produk" value="<?= $produk; ?>" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>Harga Produk</td>
                        <td> : </td>
                        <td><input type="text" name="harga_produk" value="<?= intval($harga); ?>"placeholder=""></td>
                        
                    </tr>
                    <tr>
                        <td>Jumlah Produk</td>
                        <td> : </td>
                        <td><input type="text" name="no_transaksi" placeholder=""></td>
                    </tr>
                    <tr>
                        <td class="button">
                            <button type="submit" name="totalkan">Hitung Total Harga</button>  
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    <div class="container555">
        <table>
        <form action="" method="POST">
                    <tr>
                        <td>Total Harga</td>
                        <td> : </td>
                        <td><input type="text" value="<?= $total ?>"name="totalharga" placeholder=""></td>
                        <td><?php echo"<br>"?><td>
                        <td>Pembayaran Berhasil</td>
                    </tr>
                    <tr>
                        <td>Pembayaran</td>
                        <td> : </td>
                        <td><input type="text" name="bayar" placeholder=""></td>
                        <td><?php echo"<br>"?><td>
                        <td>Kembalian</td>
                        <td> : </td>
                        <td><input type="text" value="<?= $pembayaran ?>" name="kembalian" placeholder=""></td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" name="kembalian">Hitung Kembalian</button>  
                        </td>
                        <td><?php echo"<br>"?><td>
                        <td>
                            <button type="submit" name="simpan" onclick="openForm()">Simpan Transaksi</button>  
                        </td>
                    </tr>
                </form>
</table>
</div>

</body>
<div class="footer"><p align="center">Copyright ©Adhim Maulana</a></p>
</div>