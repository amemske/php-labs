<?php

namespace App;

/*
 * Write a function that takes a string as input and returns its Base64 encoded representation.
 */
class Base64EncodingAndDecoding {
    public function  base64Encoding ($string): string
    {
        return base64_encode($string);
    }

    public function  base64Decoding ($base64string): string|bool
    {
        return base64_decode($base64string);

    }
}

$converter = new Base64EncodingAndDecoding;
echo $converter->base64Encoding("Hello, World!");
echo $converter->base64Decoding("SGVsbG8sIFdvcmxkIQ==");