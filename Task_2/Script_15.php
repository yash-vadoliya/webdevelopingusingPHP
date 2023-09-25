<!--Script_15: Write a PHP script to find the largest of three numbers entered by the user. -->

<?php 

	$a = 100;
	$b = 200;
	$c = 30;

	if($a>$b && $a>$c)
		echo "A is Largest Number.";
	if($b>$a && $b>$c)
		echo "B is Largest Number";
	if($c>$a && $c>$b)
		echo "C is Largest Number";

?>