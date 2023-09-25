<!--Script_14: Create a PHP script that calculates the sum of all numbers from 1 to 100 and displays the result. -->

<?php

	$i = 1;
	$sum = 0;

	while($i <= 100)
	{
		$sum = $sum + $i;
		$i++;
	}

	echo $sum;

?>