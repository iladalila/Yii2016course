<strong> Malaysia States: </strong>

   <?php
    $states = array("Selangor", "Johor", "Kedah", "Kelantan", "Melaka", "Negeri Sembilan", "Pahang", "Perak","Perlis","Pulau Pinang", "Sabah", "Sarawak", "Terengganu");
    $ibunegeri = array("Shah Alam", "Johor Bahru", "AlorSetar","Kota Bahru", "BandarMelaka",  "Seremban", "Kuantan","Ipoh", "Kangar", "Georgetown", "Kota Kinabalu", "Kuching", "Kuala Terenganu");
     $shortname = array("SGR", "JHR", "KDH", "KTN", "MLK", "NSN", "PHG", "PRK", "PLS", "PNG", "SBH", "SWK", "TRG");
     $num = 0;
     do{
     	  echo "<table border ='1'>";
        if($states[$num]=="Johor")
          echo "<tr><td width=100px><strong>".$states[$num]."</strong></td><td width=100px><strong>".$ibunegeri[$num]."</strong></td><td width=100px><strong>".$shortname[$num]."</strong></tr></table>";
        else
          echo "<tr><td width=100px>".$states[$num]."</td><td width=100px>".$ibunegeri[$num]."</td><td width=100px>".$shortname[$num]."</tr></table>";

     	$num++;
     	}while($num<=12);
          
   ?>


 