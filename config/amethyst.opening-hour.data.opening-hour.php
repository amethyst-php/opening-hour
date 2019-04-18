<?php

return [
    'table'      => 'amethyst_opening_hours',
    'comment'    => 'OpeningHour',
    'model'      => Railken\Amethyst\Models\OpeningHour::class,
    'schema'     => Railken\Amethyst\Schemas\OpeningHourSchema::class,
    'repository' => Railken\Amethyst\Repositories\OpeningHourRepository::class,
    'serializer' => Railken\Amethyst\Serializers\OpeningHourSerializer::class,
    'validator'  => Railken\Amethyst\Validators\OpeningHourValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\OpeningHourAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\OpeningHourFaker::class,
    'manager'    => Railken\Amethyst\Managers\OpeningHourManager::class,
];
