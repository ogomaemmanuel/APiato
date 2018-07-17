<?php

namespace App\Containers\Members\Data\Repositories;

use App\Containers\Members\Models\Members;
use App\Ship\Parents\Repositories\Repository;

/**
 * Class MembersRepository
 */
class MembersRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

    protected $fillable = [

        'first_name',
        'second_name',
        'id_no',
        'department',
        'phone_no'

    ];

    function boot()
    {
        parent::boot();
    }

    function model()
    {
        $members = Members::class;

        return $members;
    }

    function searchMember($request){
        Members::where('name', 'LIKE', '%'.$request->q.'%')->get();
    }

}
