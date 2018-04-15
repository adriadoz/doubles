<?php

declare(strict_types = 1);

namespace LaSalle\ChupiProject\Tests\Module\Color\Infrastructure;

use LaSalle\ChupiProject\Tests\Module\Color\Domain\ColorCollectionStub;
use LaSalle\ChupiProject\Module\Color\Domain\ColorRepository;
use Mockery;
use PHPUnit\Framework\TestCase;

final class InMemoryColorRepositoryTest extends TestCase
{
    private $repository;

    protected function setUp()
    {
        parent::setUp();
        $this->repository = Mockery::mock(ColorRepository::class);
    }

    /** @test */
    public function it_should_provide_a_collection_of_colors()
    {
        $colorCollection = ColorCollectionStub::random(3);
        $this->repository
            ->shouldReceive('all')
            ->once()
            ->andReturn($colorCollection);

        $allColors = $this->repository->all();
        $this->assertEquals($colorCollection, $allColors);
    }
}