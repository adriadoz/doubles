<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Module\Color\Domain;

final class ColorCollection
{
    private $colors;

    private function __construct($colors)
    {
        $this->colors = $colors;
    }

    public static function fromArray($colors): ColorCollection
    {
        return new self($colors);
    }

    public function toArray(): array
    {
        return $this->colors;
    }
}