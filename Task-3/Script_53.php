/*Script_53 Write a PHP script that removes duplicate values from an associative array using the array_unique() function*/.

<?php 

    $a = array('1' => 'Yash','2'=> 'Vadoliya','3'=>'Yash');
        
    print_r(array_unique($a));

?>