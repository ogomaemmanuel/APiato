@extends('members::layout')
@section('content')
    <h4>Create Board</h4>
    {!! Form::open(array('route' => 'web_board_store')) !!}
    {{ Form::label('name', 'Name:') }}
    {{ Form::text('name', null, array('class' => 'form-control')) }}
    {{ Form::label('description', 'Decription:') }}
    {{ Form::text('description', null, array('class' => 'form-control')) }}
    {{ Form::submit('Save', array('class' => 'primary button', 'style' => 'margin-top: 20px;')) }}
    {!! Form::close() !!}
@endsection