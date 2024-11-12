<?php 
 $string = "php is a poggramming language ...php is server side sccripting language";
  $exp = preg_match_all("/php|is/",$string, $array);
  if($exp){
    echo "The match is found ";

  }else{
 echo "The mathch was not found";

  }
  echo "<pre>";
  print_r($array);
  echo "</pre>";

?>