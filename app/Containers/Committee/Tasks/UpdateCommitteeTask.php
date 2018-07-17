<?php

namespace App\Containers\Committee\Tasks;

use App\Containers\Committee\Data\Repositories\CommitteeRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateCommitteeTask extends Task
{

    private $repository;

    public function __construct(CommitteeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
