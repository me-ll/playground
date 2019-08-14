<?php

/*
Test code for factorial.php
*/

// -- File for test --
require "factorial.php";

// -- Numbers to check --
//key : the number you want to check
//value : the factorial of a number

$checkNumbers_arr[1] = 1; //1!
$checkNumbers_arr[2] = 2; //2!
$checkNumbers_arr[3] = 6; //3!
$checkNumbers_arr[4] = 24;
$checkNumbers_arr[5] = 120;
$checkNumbers_arr[15] = 1307674368000;
$checkNumbers_arr[20] = 2432902008176640000;

$checkNumbers_arr[6] = 100; //It's supposed to be NG
$checkNumbers_arr[8] = 22; //It's supposed to be NG


foreach($checkNumbers_arr as $number => $factorial){

    echo $number.": ";

    if(factorial($number) === $factorial){
        echo "OK";
    }else{
        echo "NG (factorial:".factorial($number).")";
    }

    echo "\n";

}

/*
Output

1: OK
2: OK
3: OK
4: OK
5: OK
15: OK
20: OK
6: NG (factorial:720)
8: NG (factorial:40320)
*/

?>
