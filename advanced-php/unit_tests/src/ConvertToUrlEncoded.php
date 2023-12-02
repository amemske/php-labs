<?php

namespace App;

class ConvertToUrlEncoded
{
    function toURLEncoded($string): string
    {
        $encodedString = '';
        $length = mb_strlen($string);

        for ($i = 0; $i < $length; $i++) { //iterates over each character in the input string
            $char = mb_substr($string, $i, 1); //extract a single character from the input string.
            $encodedChar = $this->encodeCharToURL($char);//The method returns the URL-encoded representation of the character.
            $encodedString .= $encodedChar;//The URL-encoded character $encodedChar is appended to the $encodedString.
        }

        return $encodedString;//Return the encoded string
    }

    function encodeCharToURL($char): string
    {
        $charCode = ord($char); //get the ASCII value of the character

        if ($charCode < 128) {
            // Regular ASCII character
            return rawurlencode($char); //encode a string in a way that makes it safe for use in a URL, replacing special characters with their hexadecimal representation preceded by a percent sign (%)
        } else {
            // Non-ASCII character
            $utf8Char = utf8_encode($char); //convert the non-ascii character to UTF-8
            $bytes = str_split($utf8Char); //split the UTF-8 encoded character into an array of individual bytes.
            // iterate over each byte in the $bytes array
            // take each byte, convert it into hexadecimal using bin2hex(), convert the hexadecimal to uppercase using
            // strtoupper(), and append a '%' character at the beginning.
            $encodedBytes = array_map(function ($byte) {
                return '%' . strtoupper(bin2hex($byte));
            }, $bytes);
            //concatenate all the encoded bytes in the $encodedBytes array into a single string
            //An empty string '' is used as the glue between the encoded bytes, so they are joined together without any separators.
            //Return the final URL-encoded representation of the non-ASCII character.
            return implode('', $encodedBytes);
        }
    }
}

$converter = new ConvertToUrlEncoded();
$input = "1234567890";
$output = $converter->toURLEncoded($input);
echo $output; // output 1234567890

//$input  = Hello, World!  // output is Hello%2C%20World%21

//inout = こんにちは //output is %E3%81%93%E3%82%93%E3%81%AB%E3%81%A1%E3%81%AF



