<?php declare(strict_types=1);

namespace tests;

use App\patterns\InfQixFooPatterns;
use App\TransformingNumbersClass;
use PHPUnit\Framework\TestCase;

/**
 * @covers \App\Patterns\InfQixFooPatterns
 * @covers \App\TransformingNumbersClass
 */

class NumbersAndDigitsForInfQixFooTests extends TestCase
{
    public function testInfQixFooWithMultipleAndOccurrenceOfEight(): void
    {
        $InfQixFoo = new TransformingNumbersClass(new InfQixFooPatterns());
        $this->assertEquals('Inf', $InfQixFoo->transformNumber(16));
        $this->assertEquals('Inf;Inf', $InfQixFoo->transformNumber(881));
    }

    public function testInfQixFooMultipleAndOccurrenceOfSeven(): void
    {
        $InfQixFoo = new TransformingNumbersClass(new InfQixFooPatterns());
        $this->assertEquals('Qix;Qix', $InfQixFoo->transformNumber(7));
        $this->assertEquals('Qix', $InfQixFoo->transformNumber(14));
    }

    public function testInfQixFooWithMultipleAndOccurrenceOfThree(): void
    {
        $InfQixFoo = new TransformingNumbersClass(new InfQixFooPatterns());
        $this->assertEquals('Foo;Foo', $InfQixFoo->transformNumber(3));
        $this->assertEquals('Foo', $InfQixFoo->transformNumber(9));
        $this->assertEquals('Foo;Foo', $InfQixFoo->transformNumber(331));
    }

    public function testInfQixFooMultipleAndOccurrenceOfEightAndSeven(): void
    {
        $InfQixFoo = new TransformingNumbersClass(new InfQixFooPatterns());
        $this->assertEquals('Inf;Qix', $InfQixFoo->transformNumber(56));
        $this->assertEquals('Inf;Qix', $InfQixFoo->transformNumber(874));
        $this->assertEquals('Qix;Inf;Qix;Inf', $InfQixFoo->transformNumber(78781));
    }

    public function testInfQixFooMultipleAndOccurrenceOfEightAndThree(): void
    {
        $InfQixFoo = new TransformingNumbersClass(new InfQixFooPatterns());
        $this->assertEquals('Inf;Foo', $InfQixFoo->transformNumber(24));
        $this->assertEquals('Foo;Inf;Foo', $InfQixFoo->transformNumber(834));
        $this->assertEquals('Inf;Inf;Foo;Foo;Inf', $InfQixFoo->transformNumber(883381));
    }

    public function testInfQixFooMultipleAndOccurrenceOfSevenAndThree(): void
    {
        $InfQixFoo = new TransformingNumbersClass(new InfQixFooPatterns());
        $this->assertEquals('Qix;Foo', $InfQixFoo->transformNumber(21));
        $this->assertEquals('Qix;Foo', $InfQixFoo->transformNumber(42));
        $this->assertEquals('Foo;Qix', $InfQixFoo->transformNumber(374));
        $this->assertEquals('Foo;Qix;Foo;Qix', $InfQixFoo->transformNumber(374371));
    }

    public function testInfQixFooMultipleAndOccurrenceOfSevenAndThreeAndEight(): void
    {
        $InfQixFoo = new TransformingNumbersClass(new InfQixFooPatterns());
        $this->assertEquals('Inf;Qix;Foo;Inf', $InfQixFoo->transformNumber(168));
        $this->assertEquals('Inf;Qix;Foo;Foo;Foo', $InfQixFoo->transformNumber(336));
        $this->assertEquals('Foo;Foo;Inf;Qix;Qix;Inf;Foo', $InfQixFoo->transformNumber(387783));
    }

    public function testInfQixFooNoMultipleAndOccurrenceByEightAndSevenAndThree(): void
    {
        $InfQixFoo = new TransformingNumbersClass(new InfQixFooPatterns());
        $this->assertEquals('1', $InfQixFoo->transformNumber(1));
        $this->assertEquals('4', $InfQixFoo->transformNumber(4));
    }

    public function testInfQixFooWithSumOfAllDigitIsMultipleOfEight(): void
    {
        $InfQixFoo = new TransformingNumbersClass(new InfQixFooPatterns());
        $this->assertEquals('Inf;InfInf', $InfQixFoo->transformNumber(8));
        $this->assertEquals('QixInf', $InfQixFoo->transformNumber(71));
        $this->assertEquals('Qix;QixInf', $InfQixFoo->transformNumber(772));
    }
}