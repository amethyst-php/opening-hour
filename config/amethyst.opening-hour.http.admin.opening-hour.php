<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\OpeningHoursController::class,
    'router'     => [
        'as'     => 'opening-hour.',
        'prefix' => '/opening-hours',
    ],
];
