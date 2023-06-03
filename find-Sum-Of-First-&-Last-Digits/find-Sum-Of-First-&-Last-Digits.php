<?php

function findSumOfFirstAndLastDigits($number){
    $convertString = (string)$number;
    $firstNum = $convertString[0];
    $lastNum = $convertString[strlen($convertString)-1];
    $sum = intval($firstNum)  + intval($lastNum);
    return $sum;
}

//If readline not working or say Warning: Uninitialized string offset 0 your php version:> then comment $fromUser readline line and uncomment under $fromUser line;
//$fromUser = readline("Please enter number ");
$fromUser = "125479";
$sumNumber = findSumOfFirstAndLastDigits($fromUser);

echo "First and Last digits Sum is : $sumNumber";

?>