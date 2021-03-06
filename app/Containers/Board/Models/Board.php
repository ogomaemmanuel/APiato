<?php

namespace App\Containers\Board\Models;

use App\Ship\Parents\Models\Model;

class Board extends Model
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

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'boards';

    public function members(){
        return $this->$this->hasMany('App\Containers\Members\Models\Members');
}

    public function committees(){
        return $this->$this->hasMany('App\Ship\Parents\Models\Model\Committee');
    }
}
