/* Script_43 Develop a PHP script to extract the keys from an associative array using the array_keys() function.*/

<?php 

    $a = array
        ('1' => 'Yash','2'=> 'Vadoliya');
    
    $b = array_keys($a);
    
    print_r($b);
    

?>