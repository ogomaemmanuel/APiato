<?php

namespace App\Containers\Members\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class SearchByNameAction extends Action
{
    public function run(Request $request)
    {


        dd($request->all());


        $data = $request->sanitizeInput([
            'first_name',
            'second_name',
            'id_no',
            'phone_no',
            'department'
            // add your request data here
        ]);

        $members = Apiato::call('Members@SearchByNameTask', [$data]);

        return $members;
    }
}