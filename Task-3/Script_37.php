<!--Script_37 Develop a PHP script that uses the array_push() function to add elements to an array and the array_pop() function to remove elements from the end.-->

<?php 

	$a = array('Yash','Mayur','Parth','Abhi');

	echo "Using Push Function";
	array_push($a, 'Jay');

	print_r($a);

	echo "<br>";

	echo "Using Pop Function";
	array_pop($a);

	print_r($a);

?>