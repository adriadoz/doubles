<?php

declare(strict_types = 1);

namespace LaSalle\ChupiProject\Module\Color\Domain;

final class Color
{
    private $color;

    private function __construct(string $color)
    {
        $this->color = $color;
    }

    public static function fromString(string $color): Color
    {
        return new self($color);
    }

    public function __toString()
    {
        return (string)$this->color;
    }

    public function get(): string
    {
        return $this->color;
    }
}