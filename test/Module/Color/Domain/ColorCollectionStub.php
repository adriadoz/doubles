<?php

declare(strict_types = 1);

namespace LaSalle\ChupiProject\Tests\Module\Color\Domain;

use LaSalle\ChupiProject\Tests\Module\Color\Domain\ColorStub;
use LaSalle\ChupiProject\Module\Color\Domain\Color;
use LaSalle\ChupiProject\Module\Color\Domain\ColorCollection;

final class ColorCollectionStub
{
    public static function create(Color ...$colors): ColorCollection
    {
        return ColorCollection::fromArray(...$colors);
    }

    public static function random(int $numberItems): ColorCollection
    {
        $colors = [];
        for($i = 0; $i<$numberItems; $i++)
        {
            array_push($colors, ColorStub::random());
        }
        return self::create(...$colors);
    }
}