<?php

declare(strict_types = 1);

namespace LaSalle\ChupiProject\Tests\Module\Color\Domain;


use Faker\Factory;
use LaSalle\ChupiProject\Module\Color\Domain\Color;

final class ColorStub
{
    public static function create(string $color): Color
    {
        return Color::fromString($color);
    }

    public static function random(): Color
    {
        return self::create(Factory::create()->colorName);
    }
}