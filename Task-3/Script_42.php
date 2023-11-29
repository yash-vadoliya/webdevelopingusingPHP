/*Script_42 Create a PHP script that finds the difference between two arrays using the array_diff() function */.

<?php 

    $a = array('Yash','jay');
    $b = array('red','green');

    $res = array_diff($a,$b);
    
    print_r($res);
?>