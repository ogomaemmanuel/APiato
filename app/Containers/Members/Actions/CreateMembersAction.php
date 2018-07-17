<?php

namespace App\Containers\Members\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateMembersAction extends Action
{
    public function run(Request $request)
    {


//        dd($request->all());


        $data = $request->sanitizeInput([
            'first_name',
            'second_name',
            'id_no',
            'phone_no',
            'department'
            // add your request data here
        ]);

//        dd($data);

        $members = Apiato::call('Members@CreateMembersTask', [$data]);

        return $members;
    }
}
