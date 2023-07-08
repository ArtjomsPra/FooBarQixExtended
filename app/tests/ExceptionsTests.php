<?php declare(strict_types=1);

namespace App\tests;

use App\TransformingNumbersClass;
use PHPUnit\Framework\TestCase;
use App\patterns\FooBarQixPatterns;
use App\exceptions\InvalidArgumentException;

class ExceptionsTests extends TestCase
{

    public function testInvalidArgumentWithString(): void
    {
        $fooBarQix = new TransformingNumbersClass(new FooBarQixPatterns());

        $this->expectException(\TypeError::class);
        $this->expectExceptionMessage('Argument 1 passed to App\TransformingNumbersClass::transformNumber() must be of the type int, string given');
        $fooBarQix->transformNumber("abc");
    }

    public function testInvalidArgumentWithFloat(): void
    {
        $fooBarQix = new TransformingNumbersClass(new FooBarQixPatterns());

        $this->expectException(\TypeError::class);
        $this->expectExceptionMessage('Argument 1 passed to App\TransformingNumbersClass::transformNumber() must be of the type int, float given');
        $fooBarQix->transformNumber(3.14);
    }

    public function testInvalidArgumentWithBoolean(): void
    {
        $fooBarQix = new TransformingNumbersClass(new FooBarQixPatterns());

        $this->expectException(\TypeError::class);
        $this->expectExceptionMessage('Argument 1 passed to App\TransformingNumbersClass::transformNumber() must be of the type int, bool given');
        $fooBarQix->transformNumber(true);
    }

    public function testInvalidArgumentWithNegativeInteger(): void
    {
        $fooBarQix = new TransformingNumbersClass(new FooBarQixPatterns());

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid input. Input was -42. Only positive integers are allowed.');
        $fooBarQix->transformNumber(-42);
    }
}