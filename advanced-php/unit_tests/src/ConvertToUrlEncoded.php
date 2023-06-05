<?php

namespace App;

class ConvertToUrlEncoded
{
    function toURLEncoded($string): string
    {
        $encodedString = '';
        $length = mb_strlen($string);

        for ($i = 0; $i < $length; $i++) {
            $char = mb_substr($string, $i, 1);
            $encodedChar = $this->encodeCharToURL($char);
            $encodedString .= $encodedChar;
        }

        return $encodedString;
    }

    function encodeCharToURL($char): string
    {
        $charCode = ord($char); //get the ASCII value of the character

        if ($charCode < 128) {
            // Regular ASCII character
            return rawurlencode($char); //encode a string in a way that makes it safe for use in a URL, replacing special characters with their hexadecimal representation preceded by a percent sign (%)
        } else {
            // Non-ASCII character
            $utf8Char = utf8_encode($char);
            $bytes = str_split($utf8Char);
            $encodedBytes = array_map(function ($byte) {
                return '%' . strtoupper(bin2hex($byte));
            }, $bytes);
            return implode('', $encodedBytes);
        }
    }
}
