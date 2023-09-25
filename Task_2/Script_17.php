<!--Script_17: Create a PHP script to check if a given year is a leap year and display the result. -->

<?php 

	$year = 2005;

	if($year % 400 == 0)
		echo $year." Is Leap Year.";
	if($year % 100 == 0)
		echo $year." Is Not Leap Year.";
	if($year % 4 == 0)
		echo $year." Is Leap Year.";
	else
		echo $year." Is Not Leap Year.";
?>