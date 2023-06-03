<?php

function findSumOfFirstAndLastDigits($number){
    $convertString = (string)$number;
    $firstNum = $convertString[0];
    $lastNum = $convertString[strlen($convertString)-1];
    $sum = intval($firstNum)  + intval($lastNum);
    return $sum;
}

$fromUser = readline("Please enter number ");

$sumNumber = findSumOfFirstAndLastDigits($fromUser);

echo "First and Last digits Sum is : $sumNumber";

?>