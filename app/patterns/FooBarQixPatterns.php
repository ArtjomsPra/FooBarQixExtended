<?php declare(strict_types=1);

namespace App\patterns;

class FooBarQixPatterns implements TransformingPatternsInterface
{
    private array $patterns;
    private string $separator;
    private array $occurrences;

    public function __construct()
    {

        $this->patterns = [
            3 => 'Foo',
            5 => 'Bar',
            7 => 'Qix'
        ];

        $this->occurrences = [
            '3' => 'Foo',
            '5' => 'Bar',
            '7' => 'Qix',
        ];
        $this->separator = ',';
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
}
