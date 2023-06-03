<?php
function calculateSum($number) {
    $firstDigit = $number[0];
    $lastDigit = $number[4];
    $sum = $firstDigit + $lastDigit;
    return $sum;
}

// Example usage
$number[] = 12345;
$sum = calculateSum($number);
echo "Sum of the first and last digits: " . $sum;
