<?php

//bin2hex(): Converts binary data to its hexadecimal representation.
$data = "Hello, World!";
$hex = bin2hex($data);
echo $hex; // Output: 48656c6c6f2c20576f726c6421

//hex2bin(): Converts a hexadecimal string to binary data.
$hexData = "48656c6c6f2c20576f726c6421";
$binary = hex2bin($hexData);
echo $binary;// Output: Hello, World!


//base64_encode(): Encodes binary data using base64 encoding.
$data2 = "Hello, World!";
$base64 = base64_encode($data2);
echo $base64;// Output: SGVsbG8sIFdvcmxkIQ==


//base64_decode(): Decodes a base64 encoded string back to binary data
$base64Data = "SGVsbG8sIFdvcmxkIQ==";
$binary2= base64_decode($base64Data);
echo $binary2; // output: Hello, World!

//The pack() function packs data into a binary string according to the given format.
$int = 42;
$packedData = pack("n", $int);
echo bin2hex($packedData);// Output: 002a

echo ('<br>');

//The unpack() function unpacks a binary string into an array according to the given format.
$hexData2 = "48656c6c6f2c20576f726c6421";
$unpackedData = unpack("H*", hex2bin($hexData2));
echo $unpackedData[1];// Output: 48656c6c6f2c20576f726c6421

echo ('<br>');
//The strlen() function can be used to get the length of a string, including
$binaryData3 = "\x48\x65\x6c\x6c\x6f\x2c\x20\x57\x6f\x72\x6c\x64\x21";
$length2 = strlen($binaryData3);
echo $length2; //13