@extends('members::layout')
@section('content')
    <h4>Committee Edit Page</h4>
    {!!  Form::model($committee, ['method'=>'patch', 'route' => ['web_committee_update', $committee->id]]) !!}
    {{ Form::label('name', 'Name:') }}
    {{ Form::text('name', null, array( 'class' => 'form-control', 'required' => '', 'maxlength' => '255'))   }}
    {{ Form::label('description', 'Description:') }}
    {{ Form::text('description', null, array( 'class' => 'form-control', 'required' => '', 'maxlength' => '255'))   }}
    {{ Form::submit('Save', array('class' => 'primary button', 'style' => 'margin-top: 20px;')) }}
    {!! Form::close() !!}
@endsection