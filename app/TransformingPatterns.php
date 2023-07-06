<?php declare(strict_types=1);

namespace App;

class TransformingPatterns
{
    private array $patterns;
    private string $separator;

    public function __construct()
    {
        $this->patterns = [
            3 => 'Foo',
            5 => 'Bar',
            7 => 'Qix'
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
}
