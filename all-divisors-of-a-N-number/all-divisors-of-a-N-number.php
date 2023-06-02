<?php

function findDivisors ($number){
    $divisors = [];

    for($i =1; $i<=$number; $i ++){
        if($number % $i == 0){
            $divisors[] = $i;
        }
    }
    return  $divisors;
}

$number = 50;
$divisorsNumbers = findDivisors($number);

echo "The divisors of $number are:";
foreach($divisorsNumbers as $divisorsNumber){
    echo $divisorsNumber . ' '; 
}


?>