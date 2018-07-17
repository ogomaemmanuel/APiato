<?php

namespace App\Containers\Members\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateMembersAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'first_name',
            'second_name',
            'id_no',
            'phone_no',
            'department'
        ]);

        $members = Apiato::call('Members@UpdateMembersTask', [$request->id, $data]);

        return $members;
    }
}
