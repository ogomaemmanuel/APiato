<?php

namespace App\Containers\Committee\Models;

use App\Ship\Parents\Models\Model;

class Committee extends Model
{
    protected $fillable = [
        'name',
        'description'

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
        return $this->belongsTo('App\Containers\Board\Models\Boards');
    }

    function members(){
        return $this->$this->hasMany('App\Containers\Members\Models\Members');
    }
    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'committees';
}
