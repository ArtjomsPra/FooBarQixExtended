<?php declare(strict_types=1);

namespace App;

class FooBarQixPatterns
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

    public function transform(int $number): string
    {
        $result = '';

        foreach ($this->patterns as $divisor => $string) {
            if ($number % $divisor === 0) {
                $result .= $string . $this->separator;
            }
        }

        if (empty($result)) {
            $result = (string) $number;
        } else {
            $result = rtrim($result, $this->separator);
        }

        return $result;
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
