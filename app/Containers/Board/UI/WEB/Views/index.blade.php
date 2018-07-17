@extends('members::layout')
@section('content')
    <div class="body-info">
        <a href='{!! route('web_board_create') !!}'class="button primary">Add</a>
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
            @foreach ($boards as $board)
                <tr>
                    <td>{{$board->name}}</td>
                    <td>{{$board->description}}</td>

                    <td>
                        <a href='{!! route('web_board_show',$board->id ) !!}'class="btn btn-primary">View</a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
@endsection