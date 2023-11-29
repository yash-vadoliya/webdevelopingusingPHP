/"Script_41 Write a PHP script that finds the intersection of two arrays using the array_intersect() function.*/

<?php 

    $a = array('Yash','jay');
    $b = array('red','green');

    $res = array_intersect($a,$b);
    
    print_r($res);
?>