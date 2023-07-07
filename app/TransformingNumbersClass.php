<?php declare(strict_types=1);

namespace App;

use App\FooBarQixPatterns;

class TransformingNumbersClass
{
    private FooBarQixPatterns $pattern;

    public function __construct(FooBarQixPatterns $pattern)
    {
        $this->pattern = $pattern;
    }

    public function transformNumber(int $number): string
    {
        $multiplesResult = $this->transformMultiples($number);
        $occurrencesResult = $this->transformOccurrences($number);

        if (!empty($multiplesResult) && !empty($occurrencesResult)) {
            return $multiplesResult . $this->pattern->getSeparator() . $occurrencesResult;
        }

        return !empty($multiplesResult) ? $multiplesResult : ($occurrencesResult ?: (string)$number);
    }

    private function transformMultiples(int $number): string
    {
        $result = '';

        foreach ($this->pattern->getPatterns() as $divisor => $string) {
            if ($number % $divisor === 0) {
                $result .= $string . $this->pattern->getSeparator();
            }
        }

        return rtrim($result, $this->pattern->getSeparator());
    }

    private function transformOccurrences(int $number): string
    {
        $result = '';
        $numberAsString = (string) $number;

        foreach (str_split($numberAsString) as $digit) {
            if (isset($this->pattern->getOccurrences()[$digit])) {
                $result .= $this->pattern->getOccurrences()[$digit] . $this->pattern->getSeparator();
            }
        }

        return rtrim($result, $this->pattern->getSeparator());
    }
}