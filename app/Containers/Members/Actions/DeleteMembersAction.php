<?php

namespace App\Containers\Members\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteMembersAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Members@DeleteMembersTask', [$request->id]);
    }
}
