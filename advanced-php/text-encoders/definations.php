<?php

/*
 * text encoders are functions or classes that are used to convert text between different character encodings
 * A character encoding is a system that maps characters to binary values, which are used to represent the characters in computer memory
 *
 * There are many different character encodings in use today, such as UTF-8, ASCII, ISO-8859-1, and more. Different character encodings use different binary representations for different characters,
 *  which can lead to problems when text is transferred between systems or displayed in different contexts.
 * Text encoders in PHP provide a way to convert text between different character encodings, which can help to ensure that text is displayed correctly and consistently across
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
 *  - converts special characters in text to their corresponding HTML entities.
 * -prevents cross-site scripting(XSS) attacks by converting characters such as < and > to their HYML entity equivalent
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
 * Unicode is a character encoding standard that defines a unique numeric code point for every character, symbol, and script used in modern computing.
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
 */
