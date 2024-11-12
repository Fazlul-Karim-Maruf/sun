<?php 
$to = "mdforhadul266@gmail.com";
$subject = "Test Mail";
$massage = "Hello ! This is a simple mail massage ";
$from = "fazlulkarimmaruf0@gmail.com";
$headers = "From : $from";
mail($to ,$subject,$massage,$headers);
echo "mail sent.";

?>