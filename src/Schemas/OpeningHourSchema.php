<?php

namespace Railken\Amethyst\Schemas;

use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class OpeningHourSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\ArrayAttribute::make('schedule'),
            Attributes\ArrayAttribute::make('exceptions'),
            Attributes\EnumAttribute::make('target_type', app('amethyst')->getMorphListable('opening-hour', 'target')),
            Attributes\MorphToAttribute::make('target_id')
                ->setRelationKey('target_type')
                ->setRelationName('target')
                ->setRelations(app('amethyst')->getMorphRelationable('opening-hour', 'target')),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
