<?php
function factorial(int $number): int {

    //Base Case
    if($number == 0 || $number == 1  )
        return 1;
    //Special Case
    else if ($number < 0) {
        throw new InvalidArgumentException("Factorial is only defined for non-negative integers.");
    }
    //Recursive Case
    else
        return $number*factorial($number-1);
}

function printArryFactorial(array $numbers): void {
    foreach($numbers as $number ){
        echo factorial($number)."\n";
    }
}

$numbers = array(1, 2, 3, 4, 5);
printArryFactorial($numbers);

// Notes:
// 1- Time Complicity O(n!) since we use factorial, so it take long time and crash for very large numbers .
// 2- Use the bcmath extension, which provides functions for arbitrary-precision mathematics.

//Suggested Solutions:
// 1- Can be converted to iterative factorial which has a time complexity of O(n)
// 2- Handling large factorials or arbitrary-precision arithmetic typically involves using the bcmath extension, which provides functions for arbitrary precision mathematics.