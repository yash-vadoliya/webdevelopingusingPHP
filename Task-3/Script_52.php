/* Script_52 Develop a PHP script to merge two associative arrays using the array_merge() function and display the combined result.*/

<?php 

    $a = array('1' => 'Yash','2'=> 'Vadoliy');
    $b=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    
    print_r(array_merge($a,$b));

?>