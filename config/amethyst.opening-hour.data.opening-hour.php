<?php

return [
    'table'      => 'amethyst_opening_hours',
    'comment'    => 'OpeningHour',
    'model'      => Amethyst\Models\OpeningHour::class,
    'schema'     => Amethyst\Schemas\OpeningHourSchema::class,
    'repository' => Amethyst\Repositories\OpeningHourRepository::class,
    'serializer' => Amethyst\Serializers\OpeningHourSerializer::class,
    'validator'  => Amethyst\Validators\OpeningHourValidator::class,
    'authorizer' => Amethyst\Authorizers\OpeningHourAuthorizer::class,
    'faker'      => Amethyst\Fakers\OpeningHourFaker::class,
    'manager'    => Amethyst\Managers\OpeningHourManager::class,
];
