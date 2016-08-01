<?php
class Training{
	function Training(){
	$this->framework="Yii2 framework";
	}
}
//create an object
$train =new Training();

//show object properties
echo$train->framework;
?>