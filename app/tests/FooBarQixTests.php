<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class FooBarQixTests extends TestCase
{
    public function testFooBarQixWithMultipleOfThree(): void
    {
        $number = 9;
        $number2 = 12;
        $fooBarQix = new FooBarQix();
        $result = $fooBarQix->transform($number);
        $result2 = $fooBarQix->transform($number2);
        $this->assertEquals('Foo', $result);
        $this->assertEquals('Foo', $result2);
    }

    public function testFooBarQixWithMultipleOfFive(): void
    {
        $number = 5;
        $number2 = 20;
        $fooBarQix = new FooBarQix();
        $result = $fooBarQix->transform($number);
        $result2 = $fooBarQix->transform($number2);
        $this->assertEquals('Bar', $result);
        $this->assertEquals('Bar', $result2);
    }

    public function testFooBarQixMultipleOfThreeAndFive(): void
    {
        $number = 15;
        $number2 = 30;
        $fooBarQix = new FooBarQix();
        $result = $fooBarQix->transform($number);
        $result2 = $fooBarQix->transform($number2);
        $this->assertEquals('FooBar', $result);
        $this->assertEquals('FooBar', $result2);
    }

    public function testFooBarQixNoMultipleByThreeOrFive(): void
    {
        $number = 1;
        $number2 = 7;
        $fooBarQix = new FooBarQix();
        $result = $fooBarQix->transform($number);
        $result2 = $fooBarQix->transform($number2);
        $this->assertEquals('1', $result);
        $this->assertEquals('7', $result2);
    }

}