<?php

declare(strict_types = 1);

namespace App\Tests\Module\Color\Infrastructure;

use LaSalle\ChupiProject\Module\Color\Infrastructure\InMemoryColorRepository;
use PHPUnit\Framework\TestCase;

final class InMemoryColorRepositoryTest extends TestCase
{
    /** @var InMemoryColorRepository */
    private $colorRepository;

    protected function setUp()
    {
        parent::setUp();
        $this->colorRepository = new InMemoryColorRepository();
    }

    /** @test */
    public function it_should_provide_an_array_of_colors()
    {
        $allColors = $this->colorRepository->all();
        $this->assertTrue(is_array($allColors));
    }
}