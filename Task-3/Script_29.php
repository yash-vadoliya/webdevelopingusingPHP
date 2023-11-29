<!--Script_29 Write a PHP script to reverse the elements of an array using the array_reverse() function.-->

<?php  

	$a = array(10,230,5,0,44,80,60,88);

	print_r($a);

	rsort($a);


	$al = count($a);
	for($x = 0; $x < $al; $x++) 
	{
 		echo $a[$x];
  		echo "<br>";
  	}

?>