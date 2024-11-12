<?php
class person{
 public $name ="THhere is no name";
 public $age = "0";
 function __construct($a,$b)
 {
    $this->name = $a;
    $this->age= $b;

 }
function show()
{
    echo $this->name . "_" . $this->age ."/n";

}


}
$m1 = new person( );
$m1 = new person("karim", 50);
$m1->show();
?>