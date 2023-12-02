<?php

//The preg_match() function is used to perform a regular expression match on a string.

$string1 = "Hello, World!";
$pattern = "/^Hello/";
if(preg_match($pattern, $string1)){
    echo "Pattern matched";
} else {
    echo "Pattern not matched";
}

//+: This quantifier specifies that the preceding character or character class should be matched one or more times consecutively.
//matches one or more occurrences of a comma, period, question mark, or space character.
$text = "Hello, World. How are you?";
$array = preg_split("/[,.? ]+/", $text);
print_r($array);


//The preg_replace() function performs a regular expression search and replace on a string.

$string2 = "Hello, World!";
$pattern = "/World/";
$replacement = "Universe";
$newString = preg_replace($pattern,$replacement,$string2);
echo $newString;

//The preg_split() function is used to split a string into an array of substrings based on a regular expression pattern

$string3 = "Hello,World,Universe";
$pattern3 = "/,/";
$parts = preg_split($pattern3,$string3);
print_r($parts);

//The mb_ereg() function is a multibyte-safe regular expression match function in PHP's multibyte string extension.
$string4 = "こんにちは、世界！";
$pattern4 = "世界";
if(mb_ereg($pattern4,$string4)){
    echo 'match found';
} else {
    echo 'match not found';
}

//The mb_ereg_replace() and mb_ereg_replace_callback()  function is similar to the preg_replace() function,
// but it operates on multibyte strings. Although they can provided unexpected results in some environments.

$string5 = "Hello, 世界!";
$pattern5 = "/世界/";
$replacement5 = "World";

$newString5 = mb_ereg_replace_callback($pattern, function ($matches) use ($replacement) {
    return $replacement;
}, $string5);
echo $newString5;

//as an alternative you can use preg_replace_callback() function with the /u modifier to handle Unicode characters.
$string6 = "Hello, 世界!";
$pattern6 = "/世界/u"; //u handles unicode characters
$replacement6 = "World";

$newString = preg_replace_callback($pattern6, function ($matches) use ($replacement6) {
    return $replacement6;
}, $string6);

echo $newString; // Output: Hello, World!