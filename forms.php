<?php

$name = htmlspecialchars($_POST['name']);
$age = (int)$_POST['age'];

?>


<p>Hi there <?php echo $name ?>.</p>
<!-- htmlspecialchars is a built-in function to PHP that ensures that no one adds special characters to their inputted information, stopping someone from injecting HTML or JavaScript into the form -->
<p>I see that you are <?php echo $age ?> years old.</p>