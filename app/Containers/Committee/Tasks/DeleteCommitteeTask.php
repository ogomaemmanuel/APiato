<?php

namespace App\Containers\Committee\Tasks;

use App\Containers\Committee\Data\Repositories\CommitteeRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteCommitteeTask extends Task
{

    private $repository;

    public function __construct(CommitteeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
