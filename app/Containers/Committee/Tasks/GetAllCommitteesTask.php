<?php

namespace App\Containers\Committee\Tasks;

use App\Containers\Committee\Data\Repositories\CommitteeRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllCommitteesTask extends Task
{

    private $repository;

    public function __construct(CommitteeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
