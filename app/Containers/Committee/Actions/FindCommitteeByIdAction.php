<?php

namespace App\Containers\Committee\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindCommitteeByIdAction extends Action
{
    public function run(Request $request)
    {
        $committee = Apiato::call('Committee@FindCommitteeByIdTask', [$request->id]);

        return $committee;
    }
}
