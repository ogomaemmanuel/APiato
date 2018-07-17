<?php

namespace App\Containers\Members\UI\WEB\Controllers;

use App\Containers\Members\UI\WEB\Requests\CreateMembersRequest;
use App\Containers\Members\UI\WEB\Requests\DeleteMembersRequest;
use App\Containers\Members\UI\WEB\Requests\GetAllMembersRequest;
use App\Containers\Members\UI\WEB\Requests\FindMembersByIdRequest;
use App\Containers\Members\UI\WEB\Requests\UpdateMembersRequest;
use App\Containers\Members\UI\WEB\Requests\StoreMembersRequest;
use App\Containers\Members\UI\WEB\Requests\EditMembersRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;
use function GuzzleHttp\Promise\all;

/**
 * Class Controller
 *
 * @package App\Containers\Members\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllMembersRequest $request
     */
    public function index(GetAllMembersRequest $request)
    {

        $members = Apiato::call('Members@GetAllMembersAction', [$request]);
//        dd($members);

        return view('members::index',['members'=>$members]);
    }

    /**
     * Show one entity
     *
     * @param FindMembersByIdRequest $request
     */
    public function show(FindMembersByIdRequest $request)
    {
        $member = Apiato::call('Members@FindMembersByIdAction', [$request]);

        return view('members::edit', compact('member'));
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateMembersRequest $request
     */
    public function create(CreateMembersRequest $request)
    {
        return view('members::create');
    }

    /**
     * Add a new entity
     *
     * @param StoreMembersRequest $request
     */
    public function store(StoreMembersRequest $request)
    {
        $members = Apiato::call('Members@CreateMembersAction', [$request]);

        return redirect('members/create');
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditMembersRequest $request
     */
    public function edit(EditMembersRequest $request)
    {
        $member = Apiato::call('Members@GetMembersByIdAction', [$request]);

        return view('members/edit', compact('member'));
    }

    /**
     * Update a given entity
     *
     * @param UpdateMembersRequest $request
     */
    public function update(UpdateMembersRequest $request)
    {
//dd($request->all());
        $members = Apiato::call('Members@UpdateMembersAction', [$request]);

        return redirect('members/index');

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteMembersRequest $request
     */
    public function delete(DeleteMembersRequest $request)
    {
         $result = Apiato::call('Members@DeleteMembersAction', [$request]);

         return redirect('members::index');
    }


}
