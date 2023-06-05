<?php

//The urlencode() function encodes a string for use in a URL by replacing special characters with
// their hexadecimal representation preceded by a percent sign.

$string = "Hello, World!";
$encodedString = urlencode($string);
echo $encodedString; //output: Hello%2C+World%21;


//The urldecode() function decodes a URL-encoded string by replacing percent-encoded hexadecimal values with their corresponding characters.
$encodedString = "Hello%2C+World%21";
$string2 = urldecode($encodedString);
echo $string2; //output: Hello, World!

//The rawurlencode() function is similar to urlencode(), but it preserves characters with special meaning in URLs,
// such as the forward slash ("/").
$url = "https://www.example.com/path with spaces/page.html";
$encodedUrl = rawurlencode($url);
echo $encodedUrl; //output: // https%3A%2F%2Fwww.example.com%2Fpath%20with%20spaces%2Fpage.html

//rawurldecoded
$decodedUrl = rawurldecode($encodedUrl);
echo $decodedUrl;