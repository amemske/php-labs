<?php

/*
 * Regular expression - Is a pattern that describes a set of strings;
 * It is used for matching and replacing strings in text.
 *
 * Regular expressions consists of:-
 * 1. Modifiers
 * 2. Expressions
 * 3. MetaCharacters
 * 4. Quantifiers
 */

//Modifiers

//1. Case insensitive modifier (i)

$text ="Welcome to OUR site";
if(preg_match('/our/i', $text)) {
    echo 'Match found';
} else {
    echo 'No match found';
}


//2. multi-line matching (m)
$test2 = "Please \n leave us \n a comment";

if( preg_match('/^\s*leave/m', $test2)){ //^ means word starting on each line, \s* remove all spaces including new line characters
    echo 'Match Found';
} else {
    echo 'Match not found';
}

//unicode matching (u) - helps match foreign languages
//the + metacharacter is a quantifier that matches one or more occurrences of the preceding pattern.
//\p is a metacharacter that is used to match any Unicode character that belongs to a certain category or property.
/*
 * The \p metacharacter is followed by a pair of braces {} that contain the name of the Unicode category or property that you want to match.
 *  For example, \p{Greek} matches any Greek character, \p{Lu} matches any uppercase letter, and \p{P} matches any punctuation character.
 */

$text3 = "Hello Γειά σου κόσμε, Welcome to our site";
if(preg_match('/\p{Greek}+/u', $text3)){
    echo 'Unicode match found';
} else {
    echo 'No unicode match here';
}

/*
 *
 * The . metacharacter in a regular expression pattern matches any single character except for a newline character. So a pattern like h.
 * would match any occurrence of the letter "h" followed by any other character in the string.

For example, the pattern /h./ would match "he" in "the", "hi" in "this", "hu" in "huge", etc.
 But it would not match "h" by itself or "happiness" because there is no character after the letter "h" to match the . metacharacter.
 */

$test_string01 = "The quick brown fox jumps over the lazy dog.";
if (preg_match('/o./', $test_string01)) {
    echo 'Match found';
} else {
    echo 'No match found';
}

//^ Finds a match at the beginning of a string as in: ^Hello
$test_string02 = "Hello, World!";
if (preg_match('/^Hello/', $test_string02)) {
    echo 'Match found';
} else {
    echo 'No match found';
}

//$ Finds a match at the end of the string as in: World$

//tries to check if the ending word matches
$test_string03 = "Hello, World";
if (preg_match('/World$/', $test_string03, $matches)) {
    echo 'Match found';
    var_dump ($matches);
} else {
    echo 'No match found';
}




//\d Find the first digit
$test_string04 = "12345";
if (preg_match('/\d/', $test_string04, $matchedNums)) {
    echo 'Matched  numbers found';
    echo $matchedNums[0];
} else {
    echo 'No matched numbers found';
}
//incase you want all the digits use +
$test_string14 = "12345";
if (preg_match('/\d+/', $test_string14, $matchedNums)) {
    echo 'Matched  numbers found';
    echo $matchedNums[0];
} else {
    echo 'No matched numbers found';
}

//\s Find a whitespace character
$test_string05 = "Hello, World!";
if (preg_match('/\s/', $test_string05)) {
    echo 'Match found';
} else {
    echo 'No match found';
}

//\b Find a match at the beginning or end of a word like this: \bWORD, or like this: WORD\b

$test_string06 = "Hello, World!";
if (preg_match('/\bHello\b/', $test_string06)) {
    echo 'Match found using \b';
} else {
    echo 'No match found \b';
}

//\uxxxx Find the Unicode character specified by the hexadecimal number xxxx
$test_string07 = "Γειά σου κόσμε!";
if (preg_match('/\u0393/', $test_string07)) {
    echo 'Match found';
} else {
    echo 'No match found';
}


//store matches in an array
//() inside a pattern means capture group
//\w+ means first word
// get brown or lazy and the first word after that
/*
 * $matches[0]  is full match
 * $matches[1]  is first occurrence
 * matches[2]  is second occurrence
 */

$test_string08 = "The quick brown fox jumps over the lazy dog.";
if (preg_match('/(brown|lazy) (\w+)/', $test_string08, $matches)) {
    echo 'Match found<br>';
    echo 'First match: ' . $matches[0] . '<br>';
    echo 'Second match: ' . $matches[1] . '<br>';
    echo 'Third match: ' . $matches[2] . '<br>';
    var_dump($matches);
} else {
    echo 'No match found';
}

//square brackets








//curly braces

































/*
 * preg_match() is used to search a string for a single match of a regular expression.
 *  It returns the first match found in the string,
 *  stopping the search after the first match is found. If no match is found, preg_match() returns false.
 */


//case-insensitive search for "w3schools"

$str = 'visit Schools';
$pattern = "/Schools/i";

echo preg_match($pattern, $str); //output 1
echo ("\n");

$str = "The rain in SPAIN falls mainly on the plains";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);
echo ("\n");

//[abc] This regular expression matches any string that contains one character from the options 'a', 'b', or 'c'.
$string1 = "apples";
$string2 = "dog";
echo 'string1 - ' . preg_match("/[abc]/", $string1);
echo ("\n");
echo 'string2 - ' . preg_match("/[abc]/", $string2);

//[0-9]: This regular expression matches any string that contains one character from the range 0 to 9

