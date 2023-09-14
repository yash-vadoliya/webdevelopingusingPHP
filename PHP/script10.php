<!--10.Write a PHP program that assigns a name to the variable $name and an age to the variable $age.
Use concatenation to display a message like "Hello, John! You are 25 years old."-->

<?php 

	$name = "Hello, John! You are ";
	$age = "25 ";
	$$name = "years old.";

	echo "$name"."$age"."${$name}";

?>