<?php

namespace App\Containers\Board\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateBoardAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
           'name',
            'description'
        ]);

        $board = Apiato::call('Board@UpdateBoardTask', [$request->id, $data]);

        return $board;
    }
}
