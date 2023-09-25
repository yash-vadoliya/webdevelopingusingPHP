<!--Script_16: Develop a PHP script that takes a sentence as input and counts the number of vowels in it. -->

<?php 

	$str = "Hello! My Name Is Yash Vadoliya.";
	$v = array('a','e','i','o','u');
	$len  = strlen($str);
	$n = 0;

	//echo $len;

	for($i=1;$i<=$len;$i++)
	{
		if(in_array($str[$i], $v))
		{	$n++;
		}
		echo $n;
	}


?>