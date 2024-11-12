<?php
 $date1 = date_create("2024-4-18");
 $date2 = date_create("2023-5-19");


 $newdate = date_diff($date1 ,$date2);
 echo $newdate -> days;
 echo "<pre>";
  print_r($newdate);
  echo "</pre>";
?>