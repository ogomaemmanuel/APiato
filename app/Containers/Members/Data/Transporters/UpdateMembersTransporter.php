<?php

namespace App\Containers\Members\Data\Transporters;

use App\Ship\Parents\Transporters\Transporter;

class UpdateMembersTransporter extends Transporter
{

    /**
     * @var array
     */
    protected $schema = [
        'type' => 'object',
        'properties' => [
            'first_name',
            'second_name',
            'id_no',
            'phone_no',
            'department',
        ],
        'required'   => [
            'first_name',
            'second_name',
            'id_no',
            'phone_no',
            'department',

        ],
        'default'    => [

        ]
    ];
}
