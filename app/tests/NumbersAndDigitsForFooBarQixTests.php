<?php declare(strict_types=1);

namespace App\tests;

use App\patterns\FooBarQixPatterns;
use App\TransformingNumbersClass;
use PHPUnit\Framework\TestCase;

class NumbersAndDigitsForFooBarQixTests extends TestCase
{
    public function testFooBarQixWithMultipleAndOccurrenceOfThree(): void
    {
        $fooBarQix = new TransformingNumbersClass(new FooBarQixPatterns());
        $this->assertEquals('Foo,Foo', $fooBarQix->transformNumber(3));
        $this->assertEquals('Foo', $fooBarQix->transformNumber(9));
        $this->assertEquals('Foo,Foo', $fooBarQix->transformNumber(331));
    }

    public function testFooBarQixWithMultipleAndOccurrenceOfFive(): void
    {
        $fooBarQix = new TransformingNumbersClass(new FooBarQixPatterns());
        $this->assertEquals('Bar,Bar', $fooBarQix->transformNumber(5));
        $this->assertEquals('Bar', $fooBarQix->transformNumber(20));
        $this->assertEquals('Bar,Foo', $fooBarQix->transformNumber(53));
        $this->assertEquals('Bar,Bar', $fooBarQix->transformNumber(554));
    }

    public function testFooBarQixMultipleAndOccurrenceOfSeven(): void
    {
        $fooBarQix = new TransformingNumbersClass(new FooBarQixPatterns());
        $this->assertEquals('Qix,Qix', $fooBarQix->transformNumber(7));
        $this->assertEquals('Qix', $fooBarQix->transformNumber(14));
        $this->assertEquals('Qix', $fooBarQix->transformNumber(71));
        $this->assertEquals('Qix,Qix', $fooBarQix->transformNumber(776));
    }

    public function testFooBarQixMultipleAndOccurrenceOfThreeAndFive(): void
    {
        $fooBarQix = new TransformingNumbersClass(new FooBarQixPatterns());
        $this->assertEquals('Foo,Bar,Bar', $fooBarQix->transformNumber(15));
        $this->assertEquals('Foo,Bar,Foo', $fooBarQix->transformNumber(30));
        $this->assertEquals('Foo,Bar', $fooBarQix->transformNumber(352));
        $this->assertEquals('Foo,Bar,Foo,Bar', $fooBarQix->transformNumber(352351));
    }

    public function testFooBarQixMultipleAndOccurrenceOfThreeAndSeven(): void
    {
        $fooBarQix = new TransformingNumbersClass(new FooBarQixPatterns());
        $this->assertEquals('Foo,Qix', $fooBarQix->transformNumber(21));
        $this->assertEquals('Foo,Qix', $fooBarQix->transformNumber(42));
        $this->assertEquals('Foo,Qix', $fooBarQix->transformNumber(374));
        $this->assertEquals('Foo,Qix,Foo,Qix', $fooBarQix->transformNumber(374371));
    }

    public function testFooBarQixMultipleOfFiveAndSeven(): void
    {
        $fooBarQix = new TransformingNumbersClass(new FooBarQixPatterns());
        $this->assertEquals('Bar,Qix,Qix', $fooBarQix->transformNumber(70));
        $this->assertEquals('Bar,Qix', $fooBarQix->transformNumber(140));
        $this->assertEquals('Bar,Qix', $fooBarQix->transformNumber(578));
        $this->assertEquals('Bar,Qix,Bar,Qix', $fooBarQix->transformNumber(57578));
    }

    public function testFooBarQixMultipleOfThreeAndFiveAndSeven(): void
    {
        $fooBarQix = new TransformingNumbersClass(new FooBarQixPatterns());
        $this->assertEquals('Foo,Bar,Qix', $fooBarQix->transformNumber(210));
        $this->assertEquals('Foo,Bar,Qix', $fooBarQix->transformNumber(420));
        $this->assertEquals('Qix,Bar,Foo', $fooBarQix->transformNumber(7531));
        $this->assertEquals('Foo,Foo,Bar,Bar,Qix,Qix', $fooBarQix->transformNumber(3355771));
    }

    public function testFooBarQixNoMultipleAndOccurrenceByThreeOrFiveOrSeven(): void
    {
        $fooBarQix = new TransformingNumbersClass(new FooBarQixPatterns());
        $this->assertEquals('1', $fooBarQix->transformNumber(1));
        $this->assertEquals('4', $fooBarQix->transformNumber(4));
    }
}