<!-- Script_21 Script to check if a given number is a palindrome or not and display the result. -->

<?php
	
	$p = 12521;
	$r = 0;
	$a = $p;

	while($a > 0)
	{
		$n = $a % 10;
		$r = $r * 10 + $n;
		$a = (int)($a / 10);
	}	

	if($p == $r)
	{
		echo $p." Is Palindrome Number";
	}
	else
	{
		echo $p." Is Not Palindrome Number";
	}
?>