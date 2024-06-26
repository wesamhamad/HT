<?php
function cleanText($text):string {
    $text = strtolower($text);

    // Remove spaces and punctuation
    // The \P{L} matches any character that is not a letter
    // The \s matches whitespace characters
    // The /u flag ensures the string is treated as UTF-8
    return preg_replace('/[\P{L}\s]+/u', '', $text);;

}

function reverseString($string): string {
    return strrev($string);
}
function isPalindrome($text):bool {
    return $text == reverseString($text);
}

function printPalindrome($text):void {
    echo $text." is palindrome ? ";
    echo isPalindrome(cleanText($text))? 'Yes' :'No'."\n";
}

$palindrome = 'Am,x{t}';
printPalindrome($palindrome);

$palindrome = 'T,x{t}';
printPalindrome($palindrome);