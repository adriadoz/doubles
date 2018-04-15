<?php

declare(strict_types = 1);

namespace App\Tests\Module\Color\Domain;

use LaSalle\ChupiProject\Module\CoolWord\Infrastructure\InMemoryCoolWordRepository;
use LaSalle\ChupiProject\Module\CoolWord\Domain\RandomCoolWordSearcher;
use PHPUnit\Framework\TestCase;

final class RandomCoolWordSearcherTest extends TestCase
{
    private $coolWordRepository;
    private $coolWordSearcher;
    private $allCoolWords;

    protected function setUp()
    {
        parent::setUp();
        $this->coolWordRepository = new InMemoryCoolWordRepository();
        $this->coolWordSearcher = new RandomCoolWordSearcher($this->coolWordRepository);
        $this->allCoolWords = $this->coolWordRepository->all();
    }

    /** @test */
    public function it_should_return_a_new_cool_word_from_the_repository()
    {
        $coolWord = $this->coolWordSearcher->__invoke();
        $this->assertTrue(in_array($coolWord, $this->allCoolWords));
    }

}