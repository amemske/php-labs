<?php
// 1 = I, 2 = II, 4 = IV, 5 = V, 9=IX, 10 = X, 14 = XIV, 19=XIX, 50 = L , 100 = C, 500 = D, 900=CM 1000=M

use App\RomanNumerals;
use PHPUnit\Framework\TestCase;

//when writing tests starts with the very basic test and advance

class RomanNumeralsTest extends TestCase
{
    /** @test
     *@dataProvider checks
     */
    function it_generates_roman_numerals_for_1 ($number, $expectedRomanNumeral){

        $this->assertEquals($expectedRomanNumeral, RomanNumerals::generate($number));
    }

    /** @test
     */
    function it_cannot_generate_a_roman_numeral_for_less_than_1 (){
        $this->assertEmpty(RomanNumerals::generate(0));
    }

    /** @test
     */
    function it_cannot_generate_a_roman_numeral_for_more_than_3999 (){
        $this->assertEmpty(RomanNumerals::generate(4000));
    }







    public function checks (): array
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [6, 'VI'],
            [7, 'VII'],
            [8, 'VIII'],
            [9, 'IX'],
            [10, 'X']
        ];
    }
}
