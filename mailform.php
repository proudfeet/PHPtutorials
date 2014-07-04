<?php 
	
	$first = htmlspecialchars($_POST['firstName']);
	$last = htmlspecialchars($_POST['lastName']);
	$fullName = $first . " " . $last;
	$message = htmlspecialchars($_POST['message']);

 ?>

<h1>Hey!</h1>

<h2><?php echo $fullName ?> has news for you! He told me to tell you:</h2>

<p><?php echo $message ?></p>