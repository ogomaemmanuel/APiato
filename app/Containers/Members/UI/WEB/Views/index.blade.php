@extends('members::layout')
@section('content')
    <div class="body-info">
        <a href='{!! route('web_members_create') !!}'class="button primary">Add</a>
        <table class="member-table">

            <thead>
            <tr>
            <th>
                First Name
            </th>
            <th>
                Second Name
            </th>
            <th>
                Id No
            </th>
            <th>
                Department
            </th>
                <th>

                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($members as $member)
                <tr>
                    <td>{{$member->first_name}}</td>
                    <td>{{$member->second_name}}</td>
                    <td>{{$member->id_no}}</td>
                    <td>{{$member->department}}</td>
                    <td>
                    <a href='{!! route('web_members_show',$member->id ) !!}'class="btn btn-primary">View</a>
                   </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
@endsection








