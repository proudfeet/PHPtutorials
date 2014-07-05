<?php 
	
	$string = htmlspecialchars($_POST['rotInput']);
	$brokenString = str_split($string);

	print_r($brokenString);



?>