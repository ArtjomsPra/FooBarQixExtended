<?php declare(strict_types=1);

namespace App\tests;

use PHPUnit\Framework\TestCase;
use App\TransformingNumbersClass;
use App\TransformingPatterns;

class TransformingNumbersTests extends TestCase
{
    public function testFooBarQixWithMultipleAndOccuranceOfThree(): void
    {
        $fooBarQix = new TransformingNumbersClass(new TransformingPatterns());
        $this->assertEquals('Foo,Foo', $fooBarQix->transformNumber(3));
        $this->assertEquals('Foo', $fooBarQix->transformNumber(9));
        $this->assertEquals('Foo,Foo', $fooBarQix->transformNumber(331));
    }

    public function testFooBarQixWithMultipleAndOccuranceOfFive(): void
    {
        $fooBarQix = new TransformingNumbersClass(new TransformingPatterns());
        $this->assertEquals('Bar,Bar', $fooBarQix->transformNumber(5));
        $this->assertEquals('Bar', $fooBarQix->transformNumber(20));
        $this->assertEquals('Bar', $fooBarQix->transformNumber(53));
        $this->assertEquals('Bar,Bar', $fooBarQix->transformNumber(554));
    }

    public function testFooBarQixMultipleAndOccuranceOfSeven(): void
    {
        $fooBarQix = new TransformingNumbersClass(new TransformingPatterns());
        $this->assertEquals('Qix', $fooBarQix->transformNumber(7));
        $this->assertEquals('Qix', $fooBarQix->transformNumber(14));
        $this->assertEquals('Qix', $fooBarQix->transformNumber(71));
        $this->assertEquals('Qix,Qix', $fooBarQix->transformNumber(776));
    }

    public function testFooBarQixMultipleAndOccuranceOfThreeAndFive(): void
    {
        $fooBarQix = new TransformingNumbersClass(new TransformingPatterns());
        $this->assertEquals('Foo,Bar,Bar', $fooBarQix->transformNumber(15));
        $this->assertEquals('Foo,Bar,Foo', $fooBarQix->transformNumber(30));
        $this->assertEquals('Foo,Bar', $fooBarQix->transformNumber(352));
        $this->assertEquals('Foo,Bar,Foo,Bar', $fooBarQix->transformNumber(352351));
    }

    public function testFooBarQixMultipleAndOccuranceOfThreeAndSeven(): void
    {
        $fooBarQix = new TransformingNumbersClass(new TransformingPatterns());
        $this->assertEquals('Foo,Qix', $fooBarQix->transformNumber(21));
        $this->assertEquals('Foo,Qix', $fooBarQix->transformNumber(42));
        $this->assertEquals('Foo,Qix', $fooBarQix->transformNumber(374));
        $this->assertEquals('Foo,Qix,Foo,Qix', $fooBarQix->transformNumber(374371));
    }

    public function testFooBarQixMultipleOfFiveAndSeven(): void
    {
        $fooBarQix = new TransformingNumbersClass(new TransformingPatterns());
        $this->assertEquals('Bar,Qix', $fooBarQix->transformNumber(70));
        $this->assertEquals('Bar,Qix', $fooBarQix->transformNumber(140));
        $this->assertEquals('Bar,Qix', $fooBarQix->transformNumber(578));
        $this->assertEquals('Bar,Qix,Bar,Qix', $fooBarQix->transformNumber(57578));
    }

    public function testFooBarQixMultipleOfThreeAndFiveAndSeven(): void
    {
        $fooBarQix = new TransformingNumbersClass(new TransformingPatterns());
        $this->assertEquals('Foo,Bar,Qix', $fooBarQix->transformNumber(210));
        $this->assertEquals('Foo,Bar,Qix', $fooBarQix->transformNumber(420));
        $this->assertEquals('Qix,Bar,Foo', $fooBarQix->transformNumber(7531));
        $this->assertEquals('Bar,Foo,Qix,Bar,Foo,Qix', $fooBarQix->transformNumber(3355771));
    }

    public function testFooBarQixNoMultipleAndOccuranceByThreeOrFiveOrSeven(): void
    {
        $fooBarQix = new TransformingNumbersClass(new TransformingPatterns());
        $this->assertEquals('1', $fooBarQix->transformNumber(1));
        $this->assertEquals('4', $fooBarQix->transformNumber(4));
    }
}