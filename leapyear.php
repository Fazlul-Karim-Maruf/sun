<?php

function is_leapyear($year){
    if(!is_numeric($year)){
    echo "Please enter a numaric value ....!";
    return;
    }

    if(($year%4==0 && $year%100!=0) || $year%400 == 0){
     echo $year, "is leap year";
    }
    else{
        echo "The year is not leap year";
    }
}


$year = 2010;
is_leapyear($year);










?>