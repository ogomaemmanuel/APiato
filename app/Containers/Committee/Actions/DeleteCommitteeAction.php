<?php

namespace App\Containers\Committee\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteCommitteeAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Committee@DeleteCommitteeTask', [$request->id]);
    }
}
