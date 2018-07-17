@extends('members::layout')
@section('content')
    <div class="body-info">
        <a href='{!! route('web_committee_create') !!}'class="button primary">Add</a>
        <table class="member-table">
            <thead>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Description
                </th>
                <th>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($committees as $committee)
                <tr>
                    <td>{{$committee->name}}</td>
                    <td>{{$committee->description}}</td>

                    <td>
                        <a href='{!! route('web_committee_show',$committee->id ) !!}'class="btn btn-primary">View</a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
@endsection