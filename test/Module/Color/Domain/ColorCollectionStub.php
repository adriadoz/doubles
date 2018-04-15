<?php

declare(strict_types = 1);

namespace App\Tests\Module\Color\Domain;

use App\Tests\Module\Color\Domain\ColorStub;
use LaSalle\ChupiProject\Module\Color\Domain\ColorCollection;

final class ColorCollectionStub
{
    public static function create($colors): ColorCollection
    {
        return ColorCollection::fromArray($colors);
    }

    public static function random(int $numberItems): ColorCollection
    {
        $colors = [];
        for($i = 0; $i<$numberItems; $i++)
        {
            array_push($colors, ColorStub::random());
        }
        return self::create($colors);
    }
}