<!-- Script_20 Script to find the factorial of a given number and display the result. -->

<?php 

	$a = 5;
	$fect = 1;

	for($i=$a;$i>=1;$i--)
	{
		$fect= $fect * $i;
	}
	
	echo "Fectorial Number of  $a : $fect";
?>