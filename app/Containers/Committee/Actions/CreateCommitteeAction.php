<?php

namespace App\Containers\Committee\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateCommitteeAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'name',
            'description'
        ]);

        $committee = Apiato::call('Committee@CreateCommitteeTask', [$data]);

        return $committee;
    }
}
