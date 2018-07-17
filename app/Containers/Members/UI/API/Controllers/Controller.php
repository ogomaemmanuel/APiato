<?php

namespace App\Containers\Members\UI\API\Controllers;

use App\Containers\Members\UI\API\Requests\CreateMembersRequest;
use App\Containers\Members\UI\API\Requests\DeleteMembersRequest;
use App\Containers\Members\UI\API\Requests\GetAllMembersRequest;
use App\Containers\Members\UI\API\Requests\FindMembersByIdRequest;
use App\Containers\Members\UI\API\Requests\UpdateMembersRequest;
use App\Containers\Members\UI\API\Transformers\MembersTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Members\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateMembersRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createMembers(CreateMembersRequest $request)
    {
        $members = Apiato::call('Members@CreateMembersAction', [$request]);

        return $this->created($this->transform($members, MembersTransformer::class));
    }

    /**
     * @param FindMembersByIdRequest $request
     * @return array
     */
    public function findMembersById(FindMembersByIdRequest $request)
    {
        $members = Apiato::call('Members@FindMembersByIdAction', [$request]);

        return $this->transform($members, MembersTransformer::class);
    }

    /**
     * @param GetAllMembersRequest $request
     * @return array
     */
    public function getAllMembers(GetAllMembersRequest $request)
    {
        $members = Apiato::call('Members@GetAllMembersAction', [$request]);

        return $this->transform($members, MembersTransformer::class);
    }

    /**
     * @param UpdateMembersRequest $request
     * @return array
     */
    public function updateMembers(UpdateMembersRequest $request)
    {
        $members = Apiato::call('Members@UpdateMembersAction', [$request]);

        return $this->transform($members, MembersTransformer::class);
    }

    /**
     * @param DeleteMembersRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteMembers(DeleteMembersRequest $request)
    {
        Apiato::call('Members@DeleteMembersAction', [$request]);

        return $this->noContent();
    }

    public function searchMember(SearchByNameRequest $request)
    {

      $members=  Apiato::call('Members@SearchByNameAction', [$request]);

        return $this->transform($members, MembersTransformer::class);
    }
}
