<?php declare(strict_types=1);

namespace App\tests;

use PHPUnit\Framework\TestCase;
use App\TransformingNumbersClass;
use App\FooBarQixPatterns;

class NumbersAndDigitsForInfQixFooTests extends TestCase
{
    public function testInfQixFooWithMultipleAndOccurrenceOfEight(): void
    {
        $fooBarQix = new TransformingNumbersClass(new FooBarQixPatterns());
        $this->assertEquals('Inf;Inf', $fooBarQix->transformNumber(8));
        $this->assertEquals('Inf', $fooBarQix->transformNumber(16));
        $this->assertEquals('Inf;Inf', $fooBarQix->transformNumber(881));
    }

    public function testInfQixFooMultipleAndOccurrenceOfSeven(): void
    {
        $fooBarQix = new TransformingNumbersClass(new FooBarQixPatterns());
        $this->assertEquals('Qix;Qix', $fooBarQix->transformNumber(7));
        $this->assertEquals('Qix', $fooBarQix->transformNumber(14));
        $this->assertEquals('Qix', $fooBarQix->transformNumber(71));
        $this->assertEquals('Qix;Qix', $fooBarQix->transformNumber(776));
    }

    public function testInfQixFooWithMultipleAndOccurrenceOfThree(): void
    {
        $fooBarQix = new TransformingNumbersClass(new FooBarQixPatterns());
        $this->assertEquals('Foo;Foo', $fooBarQix->transformNumber(3));
        $this->assertEquals('Foo', $fooBarQix->transformNumber(9));
        $this->assertEquals('Foo;Foo', $fooBarQix->transformNumber(331));
    }

    public function testInfQixFooMultipleAndOccurrenceOfEightAndSeven(): void
    {
        $fooBarQix = new TransformingNumbersClass(new FooBarQixPatterns());
        $this->assertEquals('Inf;Qix', $fooBarQix->transformNumber(56));
        $this->assertEquals('Inf;Qix', $fooBarQix->transformNumber(874));
        $this->assertEquals('Inf;Qix;Inf;Qix', $fooBarQix->transformNumber(78781));
    }

    public function testInfQixFooMultipleAndOccurrenceOfEightAndThree(): void
    {
        $fooBarQix = new TransformingNumbersClass(new FooBarQixPatterns());
        $this->assertEquals('Inf;Foo', $fooBarQix->transformNumber(24));
        $this->assertEquals('Foo;Inf;Foo', $fooBarQix->transformNumber(834));
        $this->assertEquals('Inf;Inf;Qix;Qix;Inf', $fooBarQix->transformNumber(883381));
    }

    public function testInfQixFooMultipleAndOccurrenceOfSevenAndThree(): void
    {
        $fooBarQix = new TransformingNumbersClass(new FooBarQixPatterns());
        $this->assertEquals('Qix;Foo', $fooBarQix->transformNumber(21));
        $this->assertEquals('Qix;Foo', $fooBarQix->transformNumber(42));
        $this->assertEquals('Foo;Qix', $fooBarQix->transformNumber(374));
        $this->assertEquals('Foo;Qix;Foo;Qix', $fooBarQix->transformNumber(374371));
    }

    public function testInfQixFooMultipleAndOccurrenceOfSevenAndThreeAndEight(): void
    {
        $fooBarQix = new TransformingNumbersClass(new FooBarQixPatterns());
        $this->assertEquals('Inf;Qix;Foo;Inf', $fooBarQix->transformNumber(168));
        $this->assertEquals('Inf;Qix;Foo;Foo;Foo', $fooBarQix->transformNumber(336));
        $this->assertEquals('Foo;Foo;Inf;Qix;Qix;Inf;Foo', $fooBarQix->transformNumber(387783));
    }

    public function testInfQixFooNoMultipleAndOccurrenceByEightAndSevenAndThree(): void
    {
        $fooBarQix = new TransformingNumbersClass(new FooBarQixPatterns());
        $this->assertEquals('1', $fooBarQix->transformNumber(1));
        $this->assertEquals('4', $fooBarQix->transformNumber(4));
    }
}