<?php

function isPrime(mixed $i): bool
{       if ($i <= 1) {
    return false;
}
    if ($i == 2) {
        return true;
    }
    if ($i % 2 == 0) {
        return false;
    }
    for ($j = 3; $j <= sqrt($i); $j += 2) {
        if ($i % $j == 0) {
            return false;
        }
    }
    return true;
}
function isAllPrime( array $arr ) {
    foreach ($arr as $i) {
        echo $i . " is: " . (isPrime($i) ? 'Prime' : 'Not Prime') . "\n";
    }
}

$list = [2,3,7,8,9,11];

isAllPrime($list);
