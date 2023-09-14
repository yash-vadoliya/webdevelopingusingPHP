<!--8. Develop a PHP program that assigns a name to the variable $name and uses it to display a dynamic
greeting message like "Hello, John!".-->

<?php 
	
	$name = "Hello";

	$$name = "John!";

	echo "$name"." ${$name}";
	
?>