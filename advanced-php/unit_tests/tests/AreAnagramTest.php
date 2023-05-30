<?php

namespace App;

use PHPUnit\Framework\TestCase;

class AreAnagramTest extends TestCase
{
    /**
     * @test
     */
    function it_tests_anagrams_with_valid_similar_input()
    {
        $isAnagram = new AreAnagram();

        // Test valid anagrams
        $this->assertTrue($isAnagram->check_equal_strings('silent', 'silent'));
    }
    /**
     * @test
     */
    function it_tests_anagrams_with_valid_non_similar_input()
    {
        $isAnagram = new AreAnagram();

        // Test valid anagrams
        $this->assertTrue($isAnagram->check_equal_strings('bear', 'bare'));
    }

}
