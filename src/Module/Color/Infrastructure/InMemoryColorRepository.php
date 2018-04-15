<?php

declare(strict_types = 1);

namespace LaSalle\ChupiProject\Module\Color\Infrastructure;

use LaSalle\ChupiProject\Module\Color\Domain\ColorCollection;
use LaSalle\ChupiProject\Module\Color\Domain\ColorRepository;

final class InMemoryColorRepository implements ColorRepository
{
    public function all(): ColorCollection
    {
        return ColorCollection::fromArray(['red', 'cyan', 'magenta', 'green', 'black', 'yellow', 'blue', 'light_gray']);
    }
}
