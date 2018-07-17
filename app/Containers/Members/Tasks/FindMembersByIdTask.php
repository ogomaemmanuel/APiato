<?php

namespace App\Containers\Members\Tasks;

use App\Containers\Members\Data\Repositories\MembersRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindMembersByIdTask extends Task
{

    private $repository;

    public function __construct(MembersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
