<?php

namespace App\Containers\Members\Tasks;

use App\Containers\Members\Data\Repositories\MembersRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class SearchByNameTask extends Task
{

    private $repository;

    public function __construct(MembersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->searchMember($data);
        }
        catch (Exception $exception) {
            //throw new CreateResourceFailedException();
        }
    }
}