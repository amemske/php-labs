<?php

/*
 * Converting a string from one character encoding to another using iconv:
 */


$text = "This is some text in UTF-8 encoding";
if (mb_detect_encoding($text, 'UTF-8', true) === 'UTF-8') {
    echo "The string is already in UTF-8 encoding";
} else {
    echo "The string is not in UTF-8 encoding";
}

