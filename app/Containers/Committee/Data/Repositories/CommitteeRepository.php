<?php

namespace App\Containers\Committee\Data\Repositories;

use App\Containers\Committee\Models\Committee;
use App\Ship\Parents\Repositories\Repository;

/**
 * Class CommitteeRepository
 */
class CommitteeRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

    function  boot()
    {
        parent::boot();
    }

    function model()
    {
        return Committee::class;
    }
}
