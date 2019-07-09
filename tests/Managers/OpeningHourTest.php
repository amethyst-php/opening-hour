<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\OpeningHourFaker;
use Amethyst\Managers\OpeningHourManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class OpeningHourTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = OpeningHourManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = OpeningHourFaker::class;
}
