<?php

namespace App\Containers\Committee\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateCommitteeAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'name',
            'description'
        ]);

        $committee = Apiato::call('Committee@UpdateCommitteeTask', [$request->id, $data]);

        return $committee;
    }
}
