<!--Script_33 Create a PHP script to check if a specific key exists in an associative array using the array_key_exists() function.-->

<?php 

	$a = array(
		'Name' => 'Yash',
		'Progarm' => 'MCA',
		'Class' => 'A');

	//echo array_key_exists('Name', $a);
	if (array_key_exists("Name",$a))
  	{
  		echo "Key exists!"."<br>";
  		print_r($a);
  	}
	else
  	{
  		echo "Key does not exist!";
  	}

?>