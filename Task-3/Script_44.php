/*Script_44 Write a PHP script to extract the values from an associative array using the array_values() functio*/

<?php 

    $a = array
        ('1' => 'Yash','2'=> 'Vadoliya');
        
    $b = array_values($a);

    print_r($b);
?>