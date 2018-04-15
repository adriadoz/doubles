<?php

declare(strict_types = 1);

namespace LaSalle\ChupiProject\Module\CoolWord\Domain;

final class RandomCoolWordSearcher
{
    private $repository;
    private $word;

    public function __construct(CoolWordRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(): string
    {
        return $this->search()->__toString();
    }

    public function search(): ?CoolWord
    {
        $words = $this->repository->all()->toArray();

        if(count($words)==0){
            return CoolWord::fromString('');
        }

        $this->word = CoolWord::fromString((string)$words[mt_rand(0, count($words) - 1)]);

        return $this->word;

    }
}
