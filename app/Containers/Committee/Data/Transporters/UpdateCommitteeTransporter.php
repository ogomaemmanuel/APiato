<?php

namespace App\Containers\Committee\Data\Transporters;

use App\Ship\Parents\Transporters\Transporter;

class UpdateCommitteeTransporter extends Transporter
{

    /**
     * @var array
     */
    protected $schema = [
        'type' => 'object',
        'properties' => [
            'name',
            'description'
            // enter all properties here

            // allow for undefined properties
            // 'additionalProperties' => true,
        ],
        'required'   => [
            'name',
            'description'
            // define the properties that MUST be set
        ],
        'default'    => [
            // provide default values for specific properties here
        ]
    ];
}
