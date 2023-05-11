<?php

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    /** @test */
function it_generates_prime_factors_for_1(){
    $factors = new PrimeFactors(); //call class

    $this->assertEquals([], $factors->generate(1)); //call class methods
}

    /** @test */
    function it_generates_prime_factors_for_2(){
        $factors = new PrimeFactors(); //call class
        $this->assertEquals([2], $factors->generate(2)); //call class methods
    }
    /** @test */
    function it_generates_prime_factors_for_3(){
        $factors = new PrimeFactors(); //call class
        $this->assertEquals([3], $factors->generate(3)); //call class methods
    }

    /** @test */
    function it_generates_prime_factors_for_4(){
        $factors = new PrimeFactors(); //call class
        $this->assertEquals([2,2], $factors->generate(4)); //call class methods
    }


}
