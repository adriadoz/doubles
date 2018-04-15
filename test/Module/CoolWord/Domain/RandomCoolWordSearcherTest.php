<?php

declare(strict_types = 1);

namespace App\Tests\Module\CoolWord\Domain;

use LaSalle\ChupiProject\Module\CoolWord\Domain\CoolWordRepository;
use LaSalle\ChupiProject\Module\CoolWord\Domain\RandomCoolWordSearcher;
use Mockery;
use PHPUnit\Framework\TestCase;

final class RandomCoolWordSearcherTest extends TestCase
{
    /** @var CoolWordRepository|Mockery\MockInterface */
    private $repository;
    private $coolWordSearcher;

    protected function setUp()
    {
        parent::setUp();
        $this->repository =  Mockery::mock(CoolWordRepository::class);
        $this->coolWordSearcher = new RandomCoolWordSearcher($this->repository);
    }

    /** @test */
    public function it_should_search_a_new_cool_word_from_the_repository()
    {
        $wordCollection = CoolWordCollectionStub::random(3);
        $this->repository
            ->shouldReceive('all')
            ->once()
            ->andReturn($wordCollection);

        $coolWord = $this->coolWordSearcher->search();

        $this->assertTrue(in_array($coolWord, $wordCollection->toArray()));
    }
}