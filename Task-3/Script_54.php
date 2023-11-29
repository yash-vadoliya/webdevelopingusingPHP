/*Script_54 Create a PHP script that extracts a specific column from a multidimensional array using the array_column() function*/.

<?php

$a = array(
    array('id' => 1, 'name' => 'Yash', 'age' => 22),
    array('id' => 2, 'name' => 'Mayur', 'age' => 22),
    array('id' => 3, 'name' => 'parth', 'age' => 22),
);

$nm = array_column($a, 'name');

print_r($nm);
?>