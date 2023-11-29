/*Script_45 Create a PHP script that flips the keys and values of an associative array using the array_flip() function*/.

<?php 

    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $result=array_flip($a1);
    print_r($result);

?>