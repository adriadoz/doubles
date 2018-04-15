<?php

declare(strict_types = 1);

namespace LaSalle\ChupiProject\Module\CoolWord\Domain;


final class CoolWord
{
    private $word;

    private function __construct(string $word)
    {
        $this->word = $word;
    }

    public static function fromString(string $word): CoolWord
    {
        return new self($word);
    }

    public function __toString()
    {
        return (string)$this->word;
    }

    public function get(): string
    {
        return $this->word;
    }
}