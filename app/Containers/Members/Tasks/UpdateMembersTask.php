<?php

namespace App\Containers\Members\Tasks;

use App\Containers\Members\Data\Repositories\MembersRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateMembersTask extends Task
{

    private $repository;

    public function __construct(MembersRepository $repository)
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
