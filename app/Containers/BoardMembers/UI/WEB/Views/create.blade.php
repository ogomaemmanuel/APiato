@extends('members::layout')
@section('content')
    <h4>Create Board Member</h4>
    {!! Form::open(array('route' => 'web_boardmembers_store')) !!}
    {{ Form::label('name', 'Member:') }}
    {{ Form::text('name', null, array('class' => 'form-control', 'id'=>'memberautocomplete')) }}
    {{ Form::label('description', 'Decription:') }}
    {{ Form::text('description', null, array('class' => 'form-control')) }}
    {{ Form::submit('Save', array('class' => 'primary button', 'style' => 'margin-top: 20px;')) }}
    {!! Form::close() !!}
@endsection

{{--memberautocomplete--}}