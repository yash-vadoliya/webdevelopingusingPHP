/*Script_38 Write a PHP script to use the array_shift() function to remove an element from the beginning of an array and the array_unshift() function to add elements at the beginning */.

<?php

    $a = array(0 => 'Orange', 1=> 'Apple', 2 => 'Banana',3 => 'Cherry');
    $result= array_shift($a);
    print_r($a);
    echo '</br>Using array_shift function'.$result;
    
    $result= array_unshift($a);
    print_r($a);
    echo '</br>Using array_unshift function'.$result;

?>