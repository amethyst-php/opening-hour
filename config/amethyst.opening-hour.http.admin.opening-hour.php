<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\OpeningHoursController::class,
    'router'     => [
        'as'     => 'opening-hour.',
        'prefix' => '/opening-hours',
    ],
];
