<strong>States:</strong>
<ul>
	<?php
	$states = array ("selangor","Johor","N9","Melaka","Perak","Perlis",
	"Kelantan","Terengganu","PPinang","Pahang","sabah","Sarawak","Kuala Lumpur", "Labuan", "Putrajaya");
	$num = 0;
	do{
	echo "<li>".$states[$num].PHP_EOL."</li>";
	$num++;
	}while ($num<=6);
	?>
	</ul>