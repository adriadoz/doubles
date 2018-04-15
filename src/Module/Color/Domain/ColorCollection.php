<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Module\Color\Domain;

final class ColorCollection
{
    private $colors;

    private function __construct(Color ...$colors)
    {
        $this->colors = $colors;
    }

    public static function fromArray(Color ...$colors): ColorCollection
    {
        return new self(...$colors);
    }

    public function toArray(): array
    {
        return $this->colors;
    }
}