<?php declare(strict_types=1);

namespace App;

use App\TransformingPatterns;

class TransformingNumbersClass
{
    private TransformingPatterns $pattern;

    public function __construct(TransformingPatterns $pattern)
    {
        $this->pattern = $pattern;
    }

    public function transformNumber(int $number): string
    {
        return $this->pattern->transform($number);
    }
}