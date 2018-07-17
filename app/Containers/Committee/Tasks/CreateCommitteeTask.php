<?php

namespace App\Containers\Committee\Tasks;

use App\Containers\Committee\Data\Repositories\CommitteeRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateCommitteeTask extends Task
{

    private $repository;

    public function __construct(CommitteeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
