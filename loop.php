<?php

$emp = [
  [0,"ci", "grade",50000],
  [1,"ji","grade",40000],
  [2,"piyon", "grade",10000]
]; 
echo "<table border = '2px solidred' cellpadding='5px' cellspacing='0'>";
echo "<th>serial</th>";
echo "<th>position</th>";
echo "<th>grade</th>";
echo "<th>sellary</th>";
   foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td> $v2    </td> ";
    }
    echo "<tr>";
   }
   echo "</table>";
   echo "<br>";

   $marks =[
   "Maruf"=> [ 
    "physics"=> 80,
    "math"=> 90,
    "chemistry" => 85
   ],
   "Forhad"=>[
    "physics"=> 60,
    "math"=> 80,
    "chemistry" => 86
   ],
   "rafi" =>[
"physics"=> 88,
    "math"=> 93,
    "chemistry" => 89 ]
    ];

    echo "<table border = '2px' cellpadding='5px' cellspacing='0'>";
    echo "<th>Name</th>";
    echo "<th>Physics</th>";
    echo "<th>Math</th>";
    echo "<th>Chemistry</th>";
    foreach($marks as $key => $v1){
        echo "<tr> <td>$key </td>";
        foreach($v1 as $v2){
            echo "<td> $v2  </td>  ";
        }
        echo " </tr>";
    }
    echo "</table>";
    echo "<br>";


    $employ=[
        [1,"krishna","manager", 500000],
        [2,"jaydev", "accounting",40000],
        [3,"mohan", "operator",20000],
        [4,"ranga", "driver",5000]
    ];
    echo "<table border = '6px' cellpadding = '5px'>
    <tr>
    <th>id</th>
     <th>name</th>
      <th>designation</th>
       <th>salary</th>
       </tr>
    
    
    ";
    foreach($employ as list($id ,$name,$designation,$salary)){
        echo "<tr><td>$id </td> <td>$name </td> <td>$designation</td> <td> $salary </td></tr>";
    }
    echo "</table>";


?>