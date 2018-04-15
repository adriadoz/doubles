<?php

declare(strict_types = 1);

namespace LaSalle\ChupiProject\Module\Color\Infrastructure;

use LaSalle\ChupiProject\Module\Color\Domain\Color;
use LaSalle\ChupiProject\Module\Color\Domain\ColorCollection;
use LaSalle\ChupiProject\Module\Color\Domain\ColorRepository;

final class InMemoryColorRepository implements ColorRepository
{
    public function all(): ColorCollection
    {
        return ColorCollection::fromArray(
            Color::fromString('red'),
            Color::fromString('cyan'),
            Color::fromString('magenta'),
            Color::fromString('green'),
            Color::fromString('black'),
            Color::fromString('yellow'),
            Color::fromString('blue'),
            Color::fromString('light_gray')
        );
    }
}
