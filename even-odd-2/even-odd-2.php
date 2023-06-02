<?php

//given an Array of numbers 
// you have to find even numbers and odd numbers 
//even numbers total and even numbers total sum
//odd numbers total and odd numbers total sum

$numbers = [12,5,3,6,9,77,54,9,74,52,8];
$totalEvenNumberSum = 0 ;
$totalEven = 0;

$totalOddNumbersSum = 0;
$totalOdd =0 ;

foreach($numbers as $number){
    if($number % 2 == 0){
        $totalEvenNumberSum += $number;
        $totalEven++;
    }else{
        $totalOddNumbersSum += $number;
        $totalOdd ++;
    }
}
echo "Total Even Numbers is " . $totalEven .'<br>';
echo "Sum of Total even numbers is: " . $totalEvenNumberSum . '<br>';

echo "Total Odd Numbers is " . $totalOdd .'<br>';
echo "Sum of Total Odd numbers is: " . $totalOddNumbersSum . '<br>';



?>