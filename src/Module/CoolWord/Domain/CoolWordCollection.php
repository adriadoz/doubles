<?php

declare(strict_types = 1);

namespace LaSalle\ChupiProject\Module\CoolWord\Domain;


final class CoolWordCollection
{
    private $words;

    private function __construct($words)
    {
        $this->words = $words;
    }

    public static function fromArray($words): CoolWordCollection
    {
        return new self($words);
    }

    public function getArray()
    {
        return $this->words;
    }
}