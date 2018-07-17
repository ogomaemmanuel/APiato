<?php

namespace App\Containers\Board\Data\Repositories;

use App\Containers\Board\Models\Board;
use App\Ship\Parents\Repositories\Repository;

/**
 * Class BoardRepository
 */
class BoardRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',

    ];

    function boot()
    {
        parent::boot();
    }

    function model()
    {
        $members = Board::class;

        return $members;
    }

}
