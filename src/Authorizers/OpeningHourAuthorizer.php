<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class OpeningHourAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'opening-hour.create',
        Tokens::PERMISSION_UPDATE => 'opening-hour.update',
        Tokens::PERMISSION_SHOW   => 'opening-hour.show',
        Tokens::PERMISSION_REMOVE => 'opening-hour.remove',
    ];
}
