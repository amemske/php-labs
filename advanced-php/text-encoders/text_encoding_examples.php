<?php

/*
 * the string "This is some text in UTF-8 encoding" consists of ASCII characters only, which can be represented
 * using a single byte in UTF-8 encoding. Therefore, the function detects it as UTF-8 encoded text.
 */


$text = "This is some text in UTF-8 encoding";
if (mb_detect_encoding($text, 'UTF-8', true) === 'UTF-8') {
    echo "The string is already in UTF-8 encoding";
} else {
    echo "The string is not in UTF-8 encoding";
}

