<!--Script_7: Write a PHP script to swap the values of two variables $x and $y using a temporary variable. Display the swapped values using the echo statement. -->

<?php 

	$x = 10;
	$y = 20;
	$temp;

	echo "Before Swap Value....<br>";
	echo "X value is $x<br>";
	echo "Y value is $y<br>";

	$temp = $x;
	$x = $y;
	$y = $temp;

	echo "<br><br>After Swap Value....<br>";
	echo "X value is $x<br>";
	echo "Y value is $y<br>";

?>