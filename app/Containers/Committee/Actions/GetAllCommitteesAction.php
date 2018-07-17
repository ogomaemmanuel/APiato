<?php

namespace App\Containers\Committee\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllCommitteesAction extends Action
{
    public function run(Request $request)
    {
        $committees = Apiato::call('Committee@GetAllCommitteesTask');

        return $committees;
    }
}
