/*Script_47 Write a PHP script that applies a user-defined function to all elements of an array using the array_map() function.
*/

<?php 

    function myarray($a)
    {
        return $a*$a;
    }
    
    $y = array(1,2,3,4,5);
    print_r(array_map('myarray',$y));

?>