<?php declare(strict_types=1);

namespace App\patterns;

interface TransformingPatternsInterface
{
    public function getPatterns(): array;
    public function getOccurrences(): array;
    public function getSeparator(): string;
}

