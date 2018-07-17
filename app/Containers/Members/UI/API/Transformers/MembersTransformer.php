<?php

namespace App\Containers\Members\UI\API\Transformers;

use App\Containers\Members\Models\Members;
use App\Ship\Parents\Transformers\Transformer;

class MembersTransformer extends Transformer
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
     * @param Members $entity
     *
     * @return array
     */
    public function transform(Members $entity)
    {
        $response = [
            'object' => 'Members',
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
