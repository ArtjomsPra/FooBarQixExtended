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

    public function testFooBarQixMultipleOfThreeAndFive(): void
    {
        $fooBarQix = new TransformingNumbersClass(New TransformingPatterns());
        $this->assertEquals('Foo,Bar', $fooBarQix->transformNumber(15));
        $this->assertEquals('Foo,Bar', $fooBarQix->transformNumber(30));
    }

    public function testFooBarQixNoMultipleByThreeOrFive(): void
    {
        $fooBarQix = new TransformingNumbersClass(New TransformingPatterns());
        $this->assertEquals('1', $fooBarQix->transformNumber(1));
        $this->assertEquals('7', $fooBarQix->transformNumber(7));
    }
}