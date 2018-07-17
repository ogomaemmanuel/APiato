<?php

namespace App\Containers\Committee\UI\API\Controllers;

use App\Containers\Committee\UI\API\Requests\CreateCommitteeRequest;
use App\Containers\Committee\UI\API\Requests\DeleteCommitteeRequest;
use App\Containers\Committee\UI\API\Requests\GetAllCommitteesRequest;
use App\Containers\Committee\UI\API\Requests\FindCommitteeByIdRequest;
use App\Containers\Committee\UI\API\Requests\UpdateCommitteeRequest;
use App\Containers\Committee\UI\API\Transformers\CommitteeTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Committee\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateCommitteeRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createCommittee(CreateCommitteeRequest $request)
    {
        $committee = Apiato::call('Committee@CreateCommitteeAction', [$request]);

        return $this->created($this->transform($committee, CommitteeTransformer::class));
    }

    /**
     * @param FindCommitteeByIdRequest $request
     * @return array
     */
    public function findCommitteeById(FindCommitteeByIdRequest $request)
    {
        $committee = Apiato::call('Committee@FindCommitteeByIdAction', [$request]);

        return $this->transform($committee, CommitteeTransformer::class);
    }

    /**
     * @param GetAllCommitteesRequest $request
     * @return array
     */
    public function getAllCommittees(GetAllCommitteesRequest $request)
    {
        $committees = Apiato::call('Committee@GetAllCommitteesAction', [$request]);

        return $this->transform($committees, CommitteeTransformer::class);
    }

    /**
     * @param UpdateCommitteeRequest $request
     * @return array
     */
    public function updateCommittee(UpdateCommitteeRequest $request)
    {
        $committee = Apiato::call('Committee@UpdateCommitteeAction', [$request]);

        return $this->transform($committee, CommitteeTransformer::class);
    }

    /**
     * @param DeleteCommitteeRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteCommittee(DeleteCommitteeRequest $request)
    {
        Apiato::call('Committee@DeleteCommitteeAction', [$request]);

        return $this->noContent();
    }
}
