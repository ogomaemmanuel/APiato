<?php

namespace App\Containers\Members\Tasks;

use App\Containers\Members\Data\Repositories\MembersRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllMembersTask extends Task
{

    private $repository;

    public function __construct(MembersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
