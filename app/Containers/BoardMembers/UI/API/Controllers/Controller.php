<?php

namespace App\Containers\BoardMembers\UI\API\Controllers;

use App\Containers\BoardMembers\UI\API\Requests\CreateBoardMembersRequest;
use App\Containers\BoardMembers\UI\API\Requests\DeleteBoardMembersRequest;
use App\Containers\BoardMembers\UI\API\Requests\GetAllBoardMembersRequest;
use App\Containers\BoardMembers\UI\API\Requests\FindBoardMembersByIdRequest;
use App\Containers\BoardMembers\UI\API\Requests\UpdateBoardMembersRequest;
use App\Containers\BoardMembers\UI\API\Transformers\BoardMembersTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\BoardMembers\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateBoardMembersRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createBoardMembers(CreateBoardMembersRequest $request)
    {
        $boardmembers = Apiato::call('BoardMembers@CreateBoardMembersAction', [$request]);

        return $this->created($this->transform($boardmembers, BoardMembersTransformer::class));
    }

    /**
     * @param FindBoardMembersByIdRequest $request
     * @return array
     */
    public function findBoardMembersById(FindBoardMembersByIdRequest $request)
    {
        $boardmembers = Apiato::call('BoardMembers@FindBoardMembersByIdAction', [$request]);

        return $this->transform($boardmembers, BoardMembersTransformer::class);
    }

    /**
     * @param GetAllBoardMembersRequest $request
     * @return array
     */
    public function getAllBoardMembers(GetAllBoardMembersRequest $request)
    {
        $boardmembers = Apiato::call('BoardMembers@GetAllBoardMembersAction', [$request]);

        return $this->transform($boardmembers, BoardMembersTransformer::class);
    }

    /**
     * @param UpdateBoardMembersRequest $request
     * @return array
     */
    public function updateBoardMembers(UpdateBoardMembersRequest $request)
    {
        $boardmembers = Apiato::call('BoardMembers@UpdateBoardMembersAction', [$request]);

        return $this->transform($boardmembers, BoardMembersTransformer::class);
    }

    /**
     * @param DeleteBoardMembersRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteBoardMembers(DeleteBoardMembersRequest $request)
    {
        Apiato::call('BoardMembers@DeleteBoardMembersAction', [$request]);

        return $this->noContent();
    }
}
