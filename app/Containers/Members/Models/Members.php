<?php

namespace App\Containers\Members\Models;

use App\Ship\Parents\Models\Model;

class Members extends Model
{
    protected $fillable = [
        'first_name',
        'second_name',
        'department',
        'id_no',
        'phone_no'


    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
    function board(){
        return $this->belongsTo('App\Containers\Board\Models\Board');
    }

    function committee(){
        return $this->belongsTo('App\Containers\Committee\Models\Committee');
    }
    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'members';
}
