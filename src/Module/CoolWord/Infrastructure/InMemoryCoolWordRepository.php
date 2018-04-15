<?php

declare(strict_types = 1);

namespace LaSalle\ChupiProject\Module\CoolWord\Infrastructure;

use LaSalle\ChupiProject\Module\CoolWord\Domain\CoolWordCollection;
use LaSalle\ChupiProject\Module\CoolWord\Domain\CoolWordRepository;

final class InMemoryCoolWordRepository implements CoolWordRepository
{
    public function all(): CoolWordCollection
    {
        return CoolWordCollection::fromArray([
            'Chachi pistachi!',
            'Esto mola mogollón, tío!',
            'Mola mazo!',
            'Eres mazo guay',
            'Holiiiiii',
            'Besiis',
        ]);
    }
}
