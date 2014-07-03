<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Server information</title>
</head>
<body>

<?php echo "<p>Hello World</p>" ?>



<p><?php echo $_SERVER['HTTP_USER_AGENT'] ?></p>

<div>
	<?php 
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
			// strpos is a built-in php function that allow you to find a substring within a string
			// the way this statement reads is "if the string 'MSIE' is not found within the result of '$_SERVER['HTTP_USER_AGENT']', execute the below statements"

			echo "You need to rethink your life choices.";
		} else {
			echo "You are not using Internet Explorer, congratulations.";
		}
	?>
</div>

<div>
	<?php 
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
	?>
		<h3>strpos() must have returned non-false</h3>
		<p>You must be using Internet Explorer, rethink your life choices </p>
	<?php
	} else {
	?>
		<h3>strpos() must have returned false</h3>
		<p>Congratulations on using a real browser!</p>
	<?php
		}
	?>
</div>


	
</body>
</html>