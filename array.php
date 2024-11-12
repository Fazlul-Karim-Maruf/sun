 <?php 
 $colors = ["red " , "green" , 3, 4];
 for($i=0; $i < 4 ; $i++){
    echo $colors[$i] . "<br>";
 }

 $schools=["class1",2 ,3,4 ,5 ,6 ,8,"end"];
 echo "<ul>";
 for($i=0; $i<8; $i++){
    echo  "<li>$schools[$i] </li>";
 }
 echo "</ul>";
 //associative array
 $country = array(
   "one" => "bangladesh",
   "two" => "india",
   "three" => "japan"
 );
 echo "<pre>";
 print_r($country);
 echo "<pre>";
    echo $country["one"] . "<br>";
    echo $country["two"] . "<br>";



    $food = ["Apple", "Bananna","orange","Mango"];

      if(  in_array("Bananna", $food, true)){
         echo "successfully find the value";
      }
  else{
   echo "cannot find the value";
  }
?>
