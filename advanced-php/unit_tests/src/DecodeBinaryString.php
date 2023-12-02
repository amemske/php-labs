<?php
class DecodeBinaryString
{
    public function getDecodedBinaryString($encodedString)
    {
        // Ensure that the input string has a length that is a multiple of 8
        if (strlen($encodedString) % 8 != 0) {
            return false;
        }

        // Split the encoded string into individual ASCII codes
        //The for loop is used to split the input string into chunks of 8 bits (or 1 byte), which represent individual ASCII codes.
        $asciiArray = array();
        for ($i = 0; $i < strlen($encodedString); $i += 8) {
            $asciiCode = substr($encodedString, $i, 8);
            $asciiArray[] = bindec($asciiCode); //bindec() function converts a binary number to a decimal number.
        }

        // Convert the ASCII codes back to characters
        $decodedText = '';
        foreach ($asciiArray as $asciiCode) {
            $decodedText .= chr($asciiCode);//returns a character from the specified ASCII value
        }

        // Return the original text
        return $decodedText;
    }
}

$encodedString = "0110001001101111011011000110110001101111001000000101011101101111011100100110110001100100";

$decodedBinaryString= new DecodeBinaryString();
$decodedText = $decodedBinaryString->getDecodedBinaryString($encodedString);

var_dump($decodedText); // Debugging line

// Output the first character
echo $decodedText[0];


/*
 * The function converts the binary string into ASCII codes and then converts the ASCII codes back to characters,
 *  effectively decoding the original text.
 *
 * // Steps:////////////////////////////
// 1. Input string "0110001001101111011011000110110001101111001000000101011101101111011100100110110001100100"
// 2. Check if length of input string is a multiple of 8 (it is)
// 3. Split input string into groups of 8 characters: ["01100010", "01101111", "01101100", "01101100", "01101111", "00100000", "01010111", "01101111", "01110010", "01101100", "01100100"]
// 4. Convert binary strings to decimal values: [98, 111, 108, 108, 111, 32, 87, 111, 114, 108, 100]
// 5. Convert decimal values to ASCII characters: "bollo World"
// 6. Output decoded text "bollo World"
 *
 *
 *
 */