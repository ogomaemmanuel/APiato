<?php

namespace App\Containers\BoardMembers\Models;

use App\Ship\Parents\Models\Model;

class BoardMembers extends Model
{
    protected $fillable = [
        'board_id',
        'committee_id',
        'member_id',

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
       return $this->belongsTo('boards');
   }
//   function  committee(){
//       return $this->belongsTo('committees');
//   }

   function members(){
       return $this->hasMany('members');
   }

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'boardmembers';
}
