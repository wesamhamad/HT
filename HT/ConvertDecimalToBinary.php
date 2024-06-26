<?php

/**
 * This function converts a decimal number to its binary representation.
 *
 * @param int $num The decimal number to convert.
 * @return void This function does not return a value, it directly prints the binary representation.
 */
function DecimalToBinary(int $num): void
{
    // Define a mask to isolate the Most Significant Bit (MSB)
    $mask = 0b10000000;

    echo $num.' in binary is ';

    // Loop through 8 bits, since mask sets to the decimal equivalent of 128 which is represented by all ones in the eight-bit binary form
    for ($i = 0; $i <= 7; $i++) {

        // Check if the current MSB of the number is set using bitwise AND
        echo ($num & $mask ? '1':'0');

        // Check the next bit position by right shift the mask
        $mask >>= 1;
    }
}

DecimalToBinary(42);

/*
 Bitwise Used:
 1- AND (&): Used to check if the MSB of the number ($num) aligns with the current bit position in the mask ($mask).
 Think of it as an intersection - only bits set in both operands result in a 1.

 2- Right Shift (>>):Shifts the mask one position to the right after each iteration.
 This allows us to progressively check each bit in the decimal number from left to right. It's like moving a spotlight one step at a time.
 */