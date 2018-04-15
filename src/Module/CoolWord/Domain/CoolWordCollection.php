<?php

declare(strict_types = 1);

namespace LaSalle\ChupiProject\Module\CoolWord\Domain;


final class CoolWordCollection
{
    private $words;

    private function __construct(CoolWord ...$words)
    {
        $this->words = $words;
    }

    public static function fromArray(CoolWord ...$words): CoolWordCollection
    {
        return new self(...$words);
    }

    public function toArray() :array
    {
        return $this->words;
    }
}