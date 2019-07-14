<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\OpeningHour newEntity()
 * @method \Amethyst\Schemas\OpeningHourSchema getSchema()
 * @method \Amethyst\Repositories\OpeningHourRepository getRepository()
 * @method \Amethyst\Serializers\OpeningHourSerializer getSerializer()
 * @method \Amethyst\Validators\OpeningHourValidator getValidator()
 * @method \Amethyst\Authorizers\OpeningHourAuthorizer getAuthorizer()
 */
class OpeningHourManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.opening-hour.data.opening-hour';
}
