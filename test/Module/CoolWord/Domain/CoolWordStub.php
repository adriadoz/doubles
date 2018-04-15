<?php

declare(strict_types = 1);

namespace App\Tests\Module\CoolWord\Domain;

use Faker\Factory;
use LaSalle\ChupiProject\Module\CoolWord\Domain\CoolWord;

final class CoolWordStub
{
    public static function create(string $word): CoolWord
    {
        return CoolWord::fromString($word);
    }

    public static function randomWord(): CoolWord
    {
        return self::create(Factory::create()->word);
    }
}