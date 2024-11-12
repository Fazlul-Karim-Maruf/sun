<?php 
   
$a=18;
$b=2;
function test(){
    global $a, $b;
    $a = $a + $b;
}
test();
echo $a;

?>