<?php

declare(strict_types = 1);

namespace App\Tests\Module\CoolWord\Infrastructure;

use App\Tests\Module\CoolWord\Domain\CoolWordCollectionStub;
use LaSalle\ChupiProject\Module\CoolWord\Domain\CoolWordRepository;
use LaSalle\ChupiProject\Module\CoolWord\Infrastructure\InMemoryCoolWordRepository;
use Mockery;
use PHPUnit\Framework\TestCase;

final class InMemoryCoolWordRepositoryTest extends TestCase
{
    /** @var InMemoryCoolWordRepository */
    private $repository;

    protected function setUp()
    {
        parent::setUp();
        $this->repository =  Mockery::mock(CoolWordRepository::class);
    }

    /** @test */
    public function it_should_provide_a_collection_of_words()
    {
        $wordCollection = CoolWordCollectionStub::random(3);
        $this->repository
            ->shouldReceive('all')
            ->once()
            ->andReturn($wordCollection);

        $allCoolWords = $this->repository->all();
        $this->assertEquals($wordCollection, $allCoolWords);
    }
}