<?php declare(strict_types=1);

namespace App;

use App\patterns\TransformingPatternsInterface;
use App\patterns\InfQixFooPatterns;
use App\exceptions\InvalidArgumentException;
class TransformingNumbersClass
{
    private TransformingPatternsInterface $pattern;

    public function __construct(TransformingPatternsInterface $pattern)
    {
        $this->pattern = $pattern;
    }

    public function transformNumber(int $number): string
    {
        if ($number <= 0) {
            throw new InvalidArgumentException($number);
        }

        $multiplesResult = $this->transformMultiples($number);
        $occurrencesResult = $this->transformOccurrences($number);

        $result = '';

        if (!empty($multiplesResult) && !empty($occurrencesResult)) {
            $result = $multiplesResult . $this->pattern->getSeparator() . $occurrencesResult;
        } elseif (!empty($multiplesResult)) {
            $result = $multiplesResult;
        } elseif (!empty($occurrencesResult)) {
            $result = $occurrencesResult;
        } else {
            $result = (string)$number;
        }

        if ($this->pattern instanceof InfQixFooPatterns && $this->pattern->isSumMultipleOfEight($number)) {
            $result .= 'Inf';
        }

        return $result;
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