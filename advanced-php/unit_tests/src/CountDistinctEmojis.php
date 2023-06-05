<?php

namespace App;

class CountDistinctEmojis
{
    function countDistinctEmojis($string): int
    {
        $result = 0;
        $seenEmojis = [];

        $unicode_string = mb_convert_encoding($string, 'UTF-32LE', 'utf-8');//convert from UTF8 to UTF-32LE
        $unicode_array = unpack('V*', $unicode_string);

        foreach ($unicode_array as $code_point) {
           // echo "Testing1";
            // check for this range U+1F300 to U+1F6FF or U+1F600 to U+1F64F. If found, it's an emoji!
            if (($code_point >= 0x1F300 && $code_point <= 0x1F6FF) || ($code_point >= 0x1F600 && $code_point <= 0x1F64F)) {
              //  echo "Testing";
                // converts a Unicode code point to its corresponding character representation.
                $emoji = mb_chr($code_point, 'UTF-8');


                // Check if the emoji has already been seen
                if (!in_array($emoji, $seenEmojis)) {
                    $result++;
                    $seenEmojis[] = $emoji; // add emoji into the seen emojis
                }
            }
        }

        return $result;
    }
}

$string = "Hello, 🌍 World! 😀🌈🎉";
$CountDistinctEmojisClass = new CountDistinctEmojis();
echo $CountDistinctEmojisClass->countDistinctEmojis($string);
