<?php declare(strict_types=1);

namespace App\patterns;

class InfQixFooPatterns implements TransformingPatternsInterface {
    private array $patterns;
    private string $separator;
    private array $occurrences;

    public function __construct()
    {
        $this->patterns = [
            8 => 'Inf',
            7 => 'Qix',
            3 => 'Foo'
        ];

        $this->occurrences = [
            '8' => 'Inf',
            '7' => 'Qix',
            '3' => 'Foo',
        ];
        $this->separator = ';';
    }

    public function getPatterns(): array
    {
        return $this->patterns;
    }

    public function getOccurrences(): array
    {
        return $this->occurrences;
    }

    public function getSeparator(): string
    {
        return $this->separator;
    }

    public function isSumMultipleOfEight(int $number): bool
    {
        $sum = array_sum(str_split((string)$number));
        return $sum % 8 === 0;
    }
}