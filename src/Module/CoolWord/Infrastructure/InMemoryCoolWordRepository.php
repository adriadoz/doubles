<?php

declare(strict_types = 1);

namespace LaSalle\ChupiProject\Module\CoolWord\Infrastructure;

use LaSalle\ChupiProject\Module\CoolWord\Domain\CoolWord;
use LaSalle\ChupiProject\Module\CoolWord\Domain\CoolWordCollection;
use LaSalle\ChupiProject\Module\CoolWord\Domain\CoolWordRepository;

final class InMemoryCoolWordRepository implements CoolWordRepository
{
    public function all(): CoolWordCollection
    {
        return CoolWordCollection::fromArray(
            CoolWord::fromString('Chachi pistachi!'),
            CoolWord::fromString('Esto mola mogollón, tío!'),
            CoolWord::fromString('Mola mazo!'),
            CoolWord::fromString('Eres mazo guay'),
            CoolWord::fromString('Holiiiiii'),
            CoolWord::fromString('Besiis')
        );
    }
}
