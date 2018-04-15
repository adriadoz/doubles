<?php

namespace LaSalle\ChupiProject\Module\Color\Domain;

final class RandomColorSearcher
{
    private $repository;
    private $color;

    public function __construct(ColorRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke()
    {
        return $this->search()->__toString();
    }

    public function search(): ?Color
    {
        $colors = $this->repository->all()->toArray();

        if(count($colors)==0){
            return null;
        }

        $this->color = Color::fromString($colors[mt_rand(0, count($colors) - 1)]->__toString());

        return $this->color;

    }
}
