<?php declare(strict_types=1);

namespace App\tests;

use PHPUnit\Framework\TestCase;
use App\TransformingNumbersClass;
use App\TransformingPatterns;

class TransformingNumbersTests extends TestCase
{
    public function testFooBarQixWithMultipleOfThree(): void
    {
        $fooBarQix = new TransformingNumbersClass(New TransformingPatterns());
        $this->assertEquals('Foo', $fooBarQix->transformNumber(3));
        $this->assertEquals('Foo', $fooBarQix->transformNumber(9));
    }

    public function testFooBarQixWithMultipleOfFive(): void
    {
        $fooBarQix = new TransformingNumbersClass(New TransformingPatterns());
        $this->assertEquals('Bar', $fooBarQix->transformNumber(5));
        $this->assertEquals('Bar', $fooBarQix->transformNumber(10));
    }

    public function testFooBarQixMultipleOfSeven(): void
    {
        $fooBarQix = new TransformingNumbersClass(New TransformingPatterns());
        $this->assertEquals('Qix', $fooBarQix->transformNumber(7));
        $this->assertEquals('Qix', $fooBarQix->transformNumber(14));
    }

    public function testFooBarQixMultipleOfThreeAndFive(): void
    {
        $fooBarQix = new TransformingNumbersClass(New TransformingPatterns());
        $this->assertEquals('Foo,Bar', $fooBarQix->transformNumber(15));
        $this->assertEquals('Foo,Bar', $fooBarQix->transformNumber(30));
    }

    public function testFooBarQixMultipleOfThreeAndSeven(): void
    {
        $fooBarQix = new TransformingNumbersClass(New TransformingPatterns());
        $this->assertEquals('Foo,Qix', $fooBarQix->transformNumber(21));
        $this->assertEquals('Foo,Qix', $fooBarQix->transformNumber(42));
    }

    public function testFooBarQixMultipleOfFiveAndSeven(): void
    {
        $fooBarQix = new TransformingNumbersClass(New TransformingPatterns());
        $this->assertEquals('Bar,Qix', $fooBarQix->transformNumber(35));
        $this->assertEquals('Bar,Qix', $fooBarQix->transformNumber(70));
    }

    public function testFooBarQixMultipleOfThreeAndFiveAndSeven(): void
    {
        $fooBarQix = new TransformingNumbersClass(New TransformingPatterns());
        $this->assertEquals('Foo,Bar,Qix', $fooBarQix->transformNumber(210));
        $this->assertEquals('Foo,Bar,Qix', $fooBarQix->transformNumber(420));
    }

    public function testFooBarQixNoMultipleByThreeOrFiveOrSeven(): void
    {
        $fooBarQix = new TransformingNumbersClass(New TransformingPatterns());
        $this->assertEquals('1', $fooBarQix->transformNumber(1));
        $this->assertEquals('4', $fooBarQix->transformNumber(4));
    }
}