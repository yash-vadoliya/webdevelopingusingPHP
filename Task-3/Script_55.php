/*Script_55 Develop a PHP script that uses the array_key_first() and array_key_last() functions to retrieve the first and last keys of an array.*/

<?php 
    $a = array('1' => 'Yash','2'=> 'Vadoliy',"a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    
    print_r(array_key_first($a));
    
    print_r(array_key_last($a));
    
?>