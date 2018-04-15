<?php

declare(strict_types = 1);

namespace App\Tests\Module\Color\Domain;

use LaSalle\ChupiProject\Module\Color\Domain\ColorRepository;
use LaSalle\ChupiProject\Module\Color\Domain\RandomColorSearcher;
use Mockery;
use PHPUnit\Framework\TestCase;

final class RandomColorSearcherTest extends TestCase
{
    /** @var ColorRepository|Mockery\MockInterface */
    private $repository;
    private $colorSearcher;

    protected function setUp()
    {
        parent::setUp();
        $this->repository =  Mockery::mock(ColorRepository::class);
        $this->colorSearcher = new RandomColorSearcher($this->repository);
    }

    /** @test */
    public function it_should_search_a_new_color_from_the_repository()
    {
        $colorCollection = ColorCollectionStub::random(3);
        $this->repository
            ->shouldReceive('all')
            ->once()
            ->andReturn($colorCollection);

        $color = $this->colorSearcher->search();

        $this->assertTrue(in_array($color, $colorCollection->toArray()));
    }
}