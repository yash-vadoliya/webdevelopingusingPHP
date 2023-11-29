<!--Script_31 Develop a PHP script that searches for a specific element in an array using the
array_search() function and displays the index if found.-->

<?php 

	$a = array(10,230,5,0,44,80,60,88,10,0,230);

	print_r($a);

	echo "<br>get index number using serch function<br>";

	echo array_search(88, $a);

?>