<?php

/*
 * text encoders are functions or classes that are used to convert text between different character encodings
 * A character encoding is a system that maps characters to binary values, which are used to represent the characters in computer memory
 *
 * There are many different character encodings in use today, such as UTF-8, ASCII, ISO-8859-1, and more.
 * Different character encodings use different binary representations for different characters,
 *  which can lead to problems when text is transferred between systems or displayed in different contexts.
 * Text encoders in PHP provide a way to convert text between different character encodings, which can help to ensure
 *  that text is displayed correctly and consistently across
 * different systems and contexts.
 *
 * Text encoders in PHP provide a way to convert text between different character encodings, which can help to ensure that text
 *  is displayed correctly and consistently across different systems and contexts.
 *
 * Some examples of text encoders  include:
 * 1. iconv
 * - uses a simple algorithmn to convert text, it supports many character encodings
 *
 * 2. mb_convert_encoding
 * - more advanced than iconv, e.g. support  for custom encoding rules and automatic detection of input encoding
 *
 *
 * 3. utf8_encode and utf8_decode
 * - utf8_encode -converst ISO-8859-1 encoded text to UTF-8
 * - utf8_decode - converts UTF-8 text to ISO-8859-1
 *
 *
 * 4. htmlspecialchars
 * - converts special characters in text to their corresponding HTML entities.
 * - prevents cross-site scripting(XSS) attacks by converting characters such as < and > to their HTML entity equivalent
 * - It encodes only a small character set than htmlentites()
 *
 *
 * 5. htmlentities()
 * -  encodes a larger set of characters, including all characters that have special meaning in HTML,
 *  as well as any characters that are not part of the ASCII character set.
 *
 * 6. urlencode() and urldecode()
 * -  functions for decording and encording data for use in urls
 *
 * 7. base64_encode() and base64_decode()
 * - function for encoding and decoding data for use by Base64 algorithmn
 * Base64 is a binary-to-text encoding scheme that represents binary data in an ASCII string format
 * The encoded data is typically padded with one or two "=" characters at the end to indicate the number of bytes that
 *  were added as padding.
 *
 * The resulting ASCII string can be transmitted as text, decoded back into the original binary data by the recipient,
 *  and used for various purposes, such as data storage, encryption, or transmission.
 *
 *8. Unicode is a character encoding standard that defines a unique numeric code point for every character, symbol, and script used in modern computing.
 * - It provides a standardized way to represent and manipulate text in any language or script, including those that use complex scripts and non-Latin alphabets
 * - The goal of Unicode is to ensure that any text can be represented in a consistent way, regardless of the platform, language, or script used.
 *
 * In unicode, each character is assigned a unique numeric code point  which is a numeric value that represents the character e.g. U+0041
 *
 *  Unicode code points are used in encoding schemes such as UTF-8, UTF-16, and UTF-32, which allow Unicode to be used in a wide range of applications,
 *  from simple text editors to complex web applications.
 *
 * A frequency table is a data structure that lists the frequency of each distinct value in a dataset. In the context of text processing, a
 * frequency table can be used to count the frequency of each character, word, or other unit of text in a given text string.
 *
 * The mb_convert_encoding() function in PHP is used to convert a string from one character encoding to another. The to_encoding parameter
 *  specifies the target encoding, while the from_encoding parameter specifies the current encoding of the string. Here are some commonly used encoding types:

 *  UTF-8: This is the most common encoding for Unicode characters. It can represent all Unicode characters and is widely supported across platforms and applications.

 *  UTF-16LE and UTF-16BE: These are two variations of UTF-16 encoding, which uses 16 bits to represent Unicode characters. UTF-16LE is little-endian, where the least
 *  significant byte comes first, while UTF-16BE is big-endian, where the most significant byte comes first.

 *  UTF-32LE and UTF-32BE: These are two variations of UTF-32 encoding, which uses 32 bits (4 bytes) to represent Unicode characters. UTF-32LE is little-endian,
 *  and UTF-32BE is big-endian.

 *  When dealing with emojis, which are often represented by code points outside the Basic Multilingual Plane (BMP) of Unicode, it is recommended to use UTF-32 encoding
 *  rather than UTF-16. This is because UTF-32 can represent all Unicode characters directly with a fixed 32-bit encoding, including emojis and characters in the Supplementary
 *  Multilingual Plane (SMP) and beyond.

 *  On the other hand, UTF-16 uses variable-length encoding, where some characters (such as emojis) are represented by multiple 16-bit code units. This can lead to complexities
 *  when working with emojis, as you may need to handle surrogate pairs and consider the byte order (endianness) of the encoding.

 *  By using UTF-32LE encoding in the mb_convert_encoding() function, you ensure that each Unicode character, including emojis, is represented by a single 32-bit code unit,
 *  making it easier to handle and compare code points. This simplifies the emoji detection process in your algorithm.
 *
 * Here's an updated list of popular PHP functions used for handling strings, characters, and binary data, including ord and a few more:

String Manipulation:

- strlen(): Returns the length of a string.
- strpos(): Searches for a substring within a string and returns the position of the first occurrence.
- str_replace(): Replaces all occurrences of a substring with another substring in a string.
- substr(): Returns a portion of a string.
- strtolower(): Converts a string to lowercase.
- strtoupper(): Converts a string to uppercase.
- trim(): Removes whitespace or other specified characters from the beginning and end of a string.
- implode(): returns a string from the elements of an array using a specified delimiter.

Character Encoding:

- mb_convert_encoding(): Converts a string from one encoding format to another.
- mb_strlen(): Returns the length of a string in characters (multibyte-safe).
- mb_substr(): Returns a part of a string (multibyte-safe).
- mb_strpos(): Searches for a substring within a string and returns the position of the first occurrence (multibyte-safe).
- ord(): Returns the ASCII value of the first character of a string.

Binary Data: Binary data is a type of data that only has two possible values. e.g. 01 or "yes|No" or "True|False"


- bin2hex(): Converts binary data to its hexadecimal representation.
- hex2bin(): Converts a hexadecimal string to binary data.
- base64_encode(): Encodes binary data using base64 encoding.Base64 encoding is a way to represent binary data in ASCII text format
- base64_decode(): Decodes a base64 encoded string back to binary data.


URL Encoding:

- urlencode(): Encodes a string for use in a URL.
- urldecode(): Decodes a URL-encoded string.
- rawurlencode(): Encodes a string for use in a URL, preserving characters with special meaning.

Regular Expressions (Regex):

- preg_match(): Performs a regular expression match on a string.
- preg_replace(): Performs a regular expression search and replace on a string.
- preg_split(): Splits a string by a regular expression pattern.


The rawurlencode() function in PHP is used to encode a string in a way that makes it safe for use in a URL.
It performs URL encoding by replacing special characters with their hexadecimal representation preceded by a percent sign (%).

The main difference between rawurlencode() and urlencode() is that rawurlencode() keeps certain characters intact, such as the forward slash (/),
which is normally encoded by urlencode(). This is useful when you want to include URL segments or parameters that contain special characters without altering their meaning.



Unicode characters are a standardized system for encoding and representing characters from different writing systems and languages.
Unicode aims to provide a universal character set that encompasses characters from all major scripts and symbols used worldwide.

Unicode characters cover a wide range of characters, including alphabets, digits, punctuation marks, symbols, and special characters.
Here are some examples of Unicode characters:

Latin Characters: A-Z, a-z
Digits: 0-9
Accented Characters: á, é, ñ, ç
Currencies: $, €, ¥
Emojis: 😃, 🌍, 🎉
Mathematical Symbols: ∑, √, π
Greek Letters: α, β, γ
Cyrillic Characters: Я, ж, п
Devanagari Characters (used in Hindi): अ, आ, क, ख
Chinese Characters: 你, 好, 世, 界
These are just a few examples, and Unicode encompasses a vast range of characters to support various writing systems and languages across the globe.



Base64 encoding is a way to represent binary data in ASCII text format. It is often used to transmit data over networks or store it in a text file, and
is also used to include small images in text documents. Base64 encoding increases the size of the data by about 33% and is not a secure method of encoding data,
 as it can be easily decoded. Many programming languages have built-in support for Base64 encoding, and there are many online tools and libraries available for
 working with Base64 data. However, it is not an efficient way to compress data and can be CPU intensive to decode, especially for large amounts of data.
You should carefully consider whether Base64 encoding is the right choice for your specific use case
 */
