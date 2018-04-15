<?php

declare(strict_types = 1);

namespace App\Tests\Module\CoolWord\Infrastructure;

use LaSalle\ChupiProject\Module\CoolWord\Infrastructure\InMemoryCoolWordRepository;
use PHPUnit\Framework\TestCase;

final class InMemoryCoolWordRepositoryTest extends TestCase
{
    /** @var InMemoryCoolWordRepository */
    private $coolWordRepository;

    protected function setUp()
    {
        parent::setUp();
        $this->coolWordRepository = new InMemoryCoolWordRepository();
    }

    /** @test */
    public function it_should_provide_an_array_of_words()
    {
        $allCoolWords = $this->coolWordRepository->all()->getArray();
        $this->assertTrue(is_array($allCoolWords));
    }
}