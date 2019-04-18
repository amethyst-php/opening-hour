<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\OpeningHourFaker;
use Railken\Amethyst\Managers\OpeningHourManager;
use Railken\Amethyst\Tests\BaseTest;
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
