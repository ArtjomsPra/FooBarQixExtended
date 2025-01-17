<?php declare(strict_types=1);

namespace tests;

use App\exceptions\InvalidArgumentException;
use App\patterns\FooBarQixPatterns;
use App\TransformingNumbersClass;
use PHPUnit\Framework\TestCase;

/**
 * @covers \App\Exceptions\InvalidArgumentException
 */

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

    public function testInvalidArgumentWithZero(): void
    {
        $fooBarQix = new TransformingNumbersClass(new FooBarQixPatterns());

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid input. Input was 0. Only positive integers are allowed.');
        $fooBarQix->transformNumber(0);
    }

    public function testInvalidArgumentWithNegativeIntegerWithInvalidArgumentException(): void
    {
        $fooBarQix = new TransformingNumbersClass(new FooBarQixPatterns());

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid input. Input was -42. Only positive integers are allowed.');

        try {
            $fooBarQix->transformNumber(-42);
        } catch (InvalidArgumentException $exception) {
            $this->assertEquals('Invalid input. Input was -42. Only positive integers are allowed.',
                $exception->getMessage());
            throw $exception;
        }
    }
}