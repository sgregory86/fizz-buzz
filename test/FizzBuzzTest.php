<?php

use App\FizzBuzz;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    public function testNormalInputSet() {
        $fizzBuzz = new FizzBuzz();
        $inputSet = array(
            1, 2, 3, 4, 5,
            6, 7, 8, 9, 10,
            11, 12, 13, 14, 15
        );
        $expectedResults = array(
            1, 2, 'Fizz', 4, 'Buzz',
            'Fizz', 7, 8, 'Fizz', 'Buzz',
            11, 'Fizz', 13, 14, 'FizzBuzz'
        );
        $testResults = $fizzBuzz->process($inputSet);
        $this->assertEquals($expectedResults, $testResults);
    }
}