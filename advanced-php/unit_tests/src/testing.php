<?php

    // Pass the original text
    // Convert characters to the ASCII codes
    // Split the individual ASCII codes into 8-bit binary string
    //concat the binary string
    //base 64 encoding starts---
    //chunck it into 6 bits and convert to decimal
    //convert the decimal to  base 64
    // Ensure that the encoded input string has a length that is a multiple of 6

$string = 'HEC';
 $asciiCode = '';

    for ($i = 0; $i < strlen($string); $i++) {
        $asciiCode = ord($string);//opposite of chr
    }
echo gettype($asciiCode) . "<br>";
    echo $asciiCode;
