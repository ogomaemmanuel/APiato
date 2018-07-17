<?php

namespace App\Containers\Committee\UI\API\Transformers;

use App\Containers\Committee\Models\Committee;
use App\Ship\Parents\Transformers\Transformer;

class CommitteeTransformer extends Transformer
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
     * @param Committee $entity
     *
     * @return array
     */
    public function transform(Committee $entity)
    {
        $response = [
            'object' => 'Committee',
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
