<?php
function maximum(array $numbers): int {
    sort($numbers); // Sorts the array in ascending order. Modern PHP versions use Timsort or a variant of QuickSort with average and worst-case time complexity of O(n log n). Ref: 1
    return $numbers[count($numbers) - 1]; // Returns the last element, which is the maximum. count() is O(1) because the length is stored in the array metadata. Ref: 2
}

function minimum(array $numbers): int {
    sort($numbers); // Sorts the array in ascending order. Modern PHP versions use Timsort or a variant of QuickSort with average and worst-case time complexity of O(n log n). Ref: 1
    return $numbers[0]; // Returns the first element, which is the minimum. Accessing an array element is O(1).
}

$numbers = array(44, 7, 89, 40, 30, 4); // Initializes the array. This is O(1).
echo "Max: " . maximum($numbers) . "\n"; // Calls maximum(), which sorts the array (O(n log n)) and retrieves the last element (O(1)). Overall, O(n log n).
echo "Min: " . minimum($numbers); // Calls minimum(), which sorts the array (O(n log n)) and retrieves the first element (O(1)). Overall, O(n log n).

// Total Time Complexity = O(n log n) + O(1) + O(n log n) + O(1) + O(1) + O(1) + O(1) = O(n log n)

/*
 The functions maximum and minimum both have a time complexity of O(n log n) due to the sorting operation inside them,
which uses an efficient algorithm with average and worst-case time complexities of O(n log n).
The overall time complexity of the code snippet is O(n log n) because the sorting operation is the dominant factor.
*/

/* References:
    1: https://www.php.net/manual/en/function.sort.php
    2: https://stackoverflow.com/questions/5835241/is-phps-count-function-o1-or-on-for-arrays
*/

