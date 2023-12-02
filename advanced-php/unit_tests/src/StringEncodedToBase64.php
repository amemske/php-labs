<?php

namespace App;

class StringEncodedToBase64
{
    /*
     * Write a function that takes a string as input and returns a binary string as output.
     * The output binary string should represent the input string using the Base64 encoding scheme.
     *
     * Hint: The Base64 encoding scheme uses a set of 64 characters to represent binary data.
     * Each character represents 6 bits of data, so every 3 bytes of input data (or 24 bits) can be represented using 4 characters.
     *  The output binary string should be padded with "=" characters at the end to make its length a multiple of 4.
     */
    //////////////// High level thought process /////////////////
    /*
    1. Convert your input string into its binary representation. To do this, you need to convert each character in the input string to its corresponding ASCII code,
        and then convert each ASCII code to its 8-bit binary representation. You can concatenate the resulting binary strings to form the complete binary representation of the input string.
    2. Split the binary representation of your input string into groups of 6 bits each. Since each group of 6 bits can represent 64 different values, you can think of these groups as
     representing base-64 digits.
    3. Convert each group of 6 bits to its corresponding decimal value. You can use the bindec() function in PHP to do this.
    4. Use a lookup table to convert each decimal value to its corresponding base-64 digit. The lookup table maps each decimal value (0-63) to the corresponding base-64 digit.
    5. Concatenate all of the base-64 digits to form the final encoded string.
    6. If the length of the encoded string is not a multiple of 4, pad the encoded string with = characters until its length is a multiple of 4.
       This is required by the Base64 encoding scheme.
     */
    public function getEncodedString($string){

        $binaryString = '';
        for ($i = 0; $i < strlen($string); $i++) {
            $binaryString .= str_pad(decbin(ord($string[$i])), 8, '0', STR_PAD_LEFT);
        }

/*
 *
 * the $base64Chars string is special because it contains all the valid Base64 characters in the correct order,
 * which is essential for performing Base64 encoding and decoding in PHP.
 */
        $string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/'; //$base64Chars string is special
        $binaryChunks = str_split($binaryString, 6);
        $finalEncodedString = '';
        foreach ($binaryChunks as $binaryChunk) {
            // Calculate how many padding characters are needed for this chunk
            $paddingLength = 6 - strlen($binaryChunk);
            // Pad the binary chunk with leading zeros
            $binaryChunk = str_pad($binaryChunk, 6, '0');
            // Convert the binary chunk to decimal
            $decimalValue = bindec($binaryChunk);
            // Convert the decimal value to its corresponding Base64 character
            $finalEncodedString .= $string[$decimalValue];
        }

// Calculate how many padding characters are needed to make the length of the encoded string a multiple of 4
        $paddingLength = 4 - (strlen($finalEncodedString) % 4);
// Add padding characters to the end of the encoded string, if needed
        $finalEncodedString = str_pad($finalEncodedString, strlen($finalEncodedString) + $paddingLength, '=', STR_PAD_RIGHT);

// Return the final encoded string
        return $finalEncodedString;
    }
}

$string = "HEC";
$stringEncodedToBase64 = new StringEncodedToBase64();
$encodedText = $stringEncodedToBase64->getEncodedString($string);
echo $encodedText;