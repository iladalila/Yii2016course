<strong> Malaysia States: </strong>

   <?php
   $statesname = array("Selangor", "Johor", "Kedah", "Melaka", "Kelantan", "Melaka", "Negeri Sembilan", "Pahang", "Perak","Perlis","Pulau Pinang", "Sabah", "Sarawak", "Terengganu");
    $ibunegeri = array("Shah Alam", "Johor Bahru", "AlorSetar", "BandarMelaka", "Kota Bahru", "Seremban", "Ipoh", "Kangar", "Georgetown", "Kota Kinabalu", "Kuching", "Kuala Terenganu");
     $shortname = array("SGR", "JHR", "KDH", "KTN", "MLK", "NSN", "PHG", "PRK", "PLS", "PNG", "SBH", "SWK", "TRG");
     $num = 0;
     do{
     	echo "<table border ='1' cellspasing ='0' cellpadding= '0'";
     	echo "<tr><td width =100px>",$statesname[$num]."</td><td width=100px>".$ibunegeri[$num]."</td><td witdth=100px>".$shortname[$num]."</td></tr>";
     	$num++;
     	}while($num<=6);
     	echo "</table>";
     
   ?>

