<?php

$color = ["a"=> "red", "b"=> "green", "c"=> "orange", "d"=> "dark"];
$color2 = ["a"=> "dark", "b"=> "orange"];
 

$newvalue = array_intersect_assoc($color , $color2);
echo "<pre>";
 print_r($newvalue);
 echo "</pre>";
    





 $newarray = array_fill(0,9, "testing");
 echo "<pre>";
 print_r($newarray);
echo "</pre>";

?>