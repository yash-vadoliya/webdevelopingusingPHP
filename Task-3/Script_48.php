/*Script_48 Create a PHP script that uses the array_reduce() function to apply a callback function to the elements of an array and return a single value */

<?php 

    function myarray($a)
    {
        return $a*$a;
    }
    
    $y = array(1,2,3,4,5);
    print_r(array_reduce($y,'myarray'));
?>