<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class OpeningHourFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('schedule', [
            'monday'    => ['09:00-12:00', '13:00-18:00'],
            'tuesday'   => ['09:00-12:00', '13:00-18:00'],
            'wednesday' => ['09:00-12:00'],
            'thursday'  => ['09:00-12:00', '13:00-18:00'],
            'friday'    => ['09:00-12:00', '13:00-20:00'],
            'saturday'  => ['09:00-12:00', '13:00-16:00'],
            'sunday'    => [],
        ]);
        $bag->set('exceptions', [
            '2016-11-11' => ['09:00-12:00'],
            '2016-12-25' => [],
            '01-01'      => [],
            '12-25'      => ['09:00-12:00'],
        ]);
        $bag->set('target_type', 'foo');
        $bag->set('target', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}
