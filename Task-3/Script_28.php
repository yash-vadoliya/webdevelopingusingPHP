<!--Script_28 Develop a PHP script that sorts an array of integers in ascending order using the sort()
function.-->

<?php  

	$a = array(10,230,5,0,44,80,60,88);

	print_r($a);

	sort($a);


	$al = count($a);
	for($x = 0; $x < $al; $x++) 
	{
 		echo $a[$x];
  		echo "<br>";
  	}

?>