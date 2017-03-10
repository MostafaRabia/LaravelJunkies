@extends('admin.container')
@section('content')
{!! Form::open(['method'=>'post','url'=>'edit/user/'.$id,'files'=>true]) !!}
<div class='form-group col-sm-9 col-sm-offset-3'>
		{!! Form::label('user_admin','user_admin') !!}
		{!! Form::number('user_admin',$getUsers->user_admin,['class'=>'form-control']) !!}
	</div>
	<div class='form-group col-sm-9 col-sm-offset-3'>
		{!! Form::label('user_banned','user_banned') !!}
		{!! Form::number('user_banned',$getUsers->user_banned,['class'=>'form-control']) !!}
	</div>
	{!! Form::submit('edit',['class'=>'btn btn-success col-sm-9 col-sm-offset-3']) !!}
{!! Form::close() !!}
@stop