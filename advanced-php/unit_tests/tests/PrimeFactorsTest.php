<?php

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    /**
     * @test
     * @dataProvider factors
     */
function it_generates_prime_factors_for_1($number, $expected){
    $factors = new PrimeFactors(); //call class

    $this->assertEquals($expected, $factors->generate($number)); //call class methods
}

    public function factors(): array
    {
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [5, [5]],
            [6, [2,3]],
            [8, [2,2,2]],
        ];
    }


}
