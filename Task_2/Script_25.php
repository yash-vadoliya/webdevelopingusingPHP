<!-- Script_25 Script to swap 2 nos without using 3rd variable using arithmetic operators. -->

<?Php 

	$x = 10;
	$y = 20;

	echo "Before Swap Value Of <br> X =".$x."<br>Y =".$y."<br>";

	$x = $x / $y;
	$y = $x * $y;
	$x = $y / $x;

	echo "After Swap Value Of <br>X = ".$x."<br>Y = ".$y;

?>
