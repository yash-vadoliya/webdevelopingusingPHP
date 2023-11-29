<!--Script_30 Create a PHP script that removes duplicate values from an array using the array_unique()
function.-->

<?php 

	$a = array(10,230,5,0,44,80,60,88,10,0,230);

	echo "Without use unique function<br>";
	print_r($a);


	echo "<br>With use unique function<br>";
	print_r(array_unique($a));

?>