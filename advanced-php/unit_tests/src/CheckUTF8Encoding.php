<?php

namespace App;

class CheckUTF8Encoding
{
    function isUTF8Encoded($string): string|bool
    {
        if (mb_detect_encoding($string, 'UTF8', true)) {
            return true;
        } else {
            return false;
        }
    }
}
$text2 = "你好，世界！";
$checkUTF8Encoding = new CheckUTF8Encoding();
echo $checkUTF8Encoding->isUTF8Encoded($text2);