<?php

namespace App\Containers\Board\UI\API\Transformers;

use App\Containers\Board\Models\Board;
use App\Ship\Parents\Transformers\Transformer;

class BoardTransformer extends Transformer
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
     * @param Board $entity
     *
     * @return array
     */
    public function transform(Board $entity)
    {
        $response = [
            'object' => 'Board',
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
