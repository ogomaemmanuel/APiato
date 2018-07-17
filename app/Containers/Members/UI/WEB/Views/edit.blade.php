@extends('members::layout')
@section('content')
    <h4>Member Edit Page</h4>
    {!!  Form::model($member, ['method'=>'patch', 'route' => ['web_members_update', $member->id]]) !!}
    {{ Form::label('first_name', 'First Name:') }}
    {{ Form::text('first_name', null, array( 'class' => 'form-control', 'required' => '', 'maxlength' => '255'))   }}
    {{ Form::label('second_name', 'Second Name:') }}
    {{ Form::text('second_name', null, array( 'class' => 'form-control', 'required' => '', 'maxlength' => '255'))   }}
    {{ Form::label('id_no', 'Id No:') }}
    {{ Form::text('id_no', null, array('class' => 'form-control')) }}
    {{ Form::label('department', 'Department:') }}
    {{ Form::text('department', null, array('class' => 'form-control')) }}
    {{ Form::label('phone_no', 'Phone No:') }}
    {{ Form::text('phone_no', null, array('class' => 'form-control')) }}
    {{ Form::submit('Save', array('class' => 'primary button', 'style' => 'margin-top: 20px;')) }}
    {!! Form::close() !!}
@endsection