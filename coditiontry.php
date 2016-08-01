<?php
$produk1 = "AloeveraGel";
$produk2 = "AloeveraBits N Peach";
$produk3 = "AloeveraBerry Nectar";
$jenama = "Forever Aloevera";
$produk =  array($produk1 => 90, $produk2 => 95, $produk3 => 100);
if($produk[$produk1] == 90){
   $harga = "90.00";
}else if($produk[$produk2] == 95){
   $Harga = "95.00";
}else if($produk[$produk3] == 100){
   $harga = "100.00;
}else{
   $harga = null;
}
if($harga==null){
   echo "masukkan harga sebenar";
}else{
   echo "Produk ".$produk1." Harganya ".$harga ;
}
?>