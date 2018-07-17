<?php

namespace App\Containers\Members\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindMembersByIdAction extends Action
{
    public function run(Request $request)
    {
        $members = Apiato::call('Members@FindMembersByIdTask', [$request->id]);

        return $members;
    }
}
