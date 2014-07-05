<?php 
	
	$string = htmlspecialchars($_POST['rotInput']);
	$brokenString = str_split($string);
	$reversedArray = array_reverse($brokenString);

	echo implode("", $reversedArray);





?>