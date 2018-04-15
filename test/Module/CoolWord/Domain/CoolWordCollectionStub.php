<?php

declare(strict_types = 1);

namespace App\Tests\Module\CoolWord\Domain;

use LaSalle\ChupiProject\Module\CoolWord\Domain\CoolWordCollection;

final class CoolWordCollectionStub
{
    public static function create($words): CoolWordCollection
    {
        return CoolWordCollection::fromArray($words);
    }

    public static function random(int $numberItems): CoolWordCollection
    {
        $words = [];
        for($i = 0; $i<$numberItems; $i++)
        {
            array_push($words, CoolWordStub::randomWord());
        }
        return self::create($words);
    }
}