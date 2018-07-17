<?php

namespace App\Containers\BoardMembers\UI\API\Transformers;

use App\Containers\BoardMembers\Models\BoardMembers;
use App\Ship\Parents\Transformers\Transformer;

class BoardMembersTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param BoardMembers $entity
     *
     * @return array
     */
    public function transform(BoardMembers $entity)
    {
        $response = [
            'object' => 'BoardMembers',
            'id' => $entity->getHashedKey(),
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
