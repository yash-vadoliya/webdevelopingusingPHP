<!-- Script_23 Script to determine the largest among three numbers and display the result. -->

<?php 

	$a = 10;
	$b = 20;
	$c = 30;

	if($a >= $b && $a >= $c)
	{
		echo "$a is Largest Number.";
	}
	if($b >= $a && $b >= $c)
	{
		echo "$b is Largest Number.";
	}
	if($c >= $b && $c >= $a)
	{
		echo "$c is Largest Number.";
	}
	

?>