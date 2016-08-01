<?php
$hargaasal = 95.40;
$lestahli =0.15;
$lestvip =0.35;
$hargabelianahli = $hargaasal-($hargaasal*$lestahli);
$hargabelianvip = $hargaasal-($hargaasal*$lestvip);

echo "harga ahli: ".$hargabelianahli."<br/>";
echo "harga vip: ".$hargabelianvip."<br/>";

?>
