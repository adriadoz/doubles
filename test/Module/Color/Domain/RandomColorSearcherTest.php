<?php

declare(strict_types = 1);

namespace App\Tests\Module\Color\Domain;

use LaSalle\ChupiProject\Module\Color\Domain\RandomColorSearcher;
use LaSalle\ChupiProject\Module\Color\Infrastructure\InMemoryColorRepository;
use PHPUnit\Framework\TestCase;

final class RandomColorSearcherTest extends TestCase
{
    private $colorRepository;
    private $colorSearcher;
    private $allColors;

    protected function setUp()
    {
        parent::setUp();
        $this->colorRepository = new InMemoryColorRepository();
        $this->colorSearcher = new RandomColorSearcher($this->colorRepository);
        $this->allColors = $this->colorRepository->all();
    }

    /** @test */
    public function it_should_search_a_new_color_from_the_repository()
    {
        $color = $this->colorSearcher->__invoke();
        $this->assertTrue(in_array($color, $this->allColors));
    }
}