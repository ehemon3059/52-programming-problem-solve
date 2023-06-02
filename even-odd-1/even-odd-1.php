<?php

$totalNum = readline("Enter the number of terms: ");

//if your readline not working uncomment $totalNum and set the value
$totalNum = 10;
$totalEvenNumSum = 0;
$totalEven = 0;
for( $i =0; $i<$totalNum ; $i++){
    if($i % 2 == 0){
         echo "even ".$i.' ,';
        $totalEvenNumSum += $i;
        $totalEven++;
    }else{
       
    }
}

echo "Sum of even numbers is: " . $totalEvenNumSum .' ';
echo "Total Even Numbers is " . $totalEven;
