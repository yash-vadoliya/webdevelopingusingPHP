<!--Script_18: Write a PHP script that generates a random number between 1 and 10 and lets the user guess it. -->

<?php

	$a = 15;

	$r = rand(1,10);

	if($a == $r)
		echo $a." Is Random Number.";
	else
		echo $a." Is Not Random Number.";

?>