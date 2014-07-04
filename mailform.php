<?php 
	
	$first = htmlspecialchars($_POST['firstName']);
	$last = htmlspecialchars($_POST['lastName']);
	$fullName = $first . " " . $last;
	$message = htmlspecialchars($_POST['message']);
	$sendto = "simon.d.proudfoot@gmail.com";
	$subject = "wanted to tell you something...";
	$header = "From: " . strip_tags($_POST['req-email']);


	mail($sendto, $fullName . " " . $subject, $message, $header)

?>

<h1>Hey!</h1>

<h2><?php echo $fullName ?> has news for you! He told me to tell you:</h2>

<p><?php echo $message ?></p>

<p>But you already knew that because your message has been sent to <?php echo $sendto ?>.</p>


