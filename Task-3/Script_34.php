<!--Script_34 Develop a PHP script to check if a specific value exists in an array using the in_array() function.-->

<?php 

	$a = array('Yash','Mayur','Parth','Abhi');

	if(in_array('Jay', $a))
	{
		echo "Match Found"."<br>";
		print_r($a);
	}
	else
	{
		echo "Match Not Found";
	}

?>