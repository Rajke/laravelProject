@extends('app')
@section('content')
	{!! Form::open(['route' => 'item.store']) !!}
	<div class="form-group">
		{!! Form::label('title','Title') !!}<br/>
		{!! Form::text('title',null,['class'=>'form-control','class'=>'col-md-6']) !!}
	</div><br/>
	<div class="form-group">
		{!! Form::label('desc','Description') !!}<br/>
		{!! Form::textarea('description',null, ['class'=>'form-control' ,'class'=>'col-md-6','rows=3'] ) !!}
	</div><br/><br/><br/><br/>
	<div class="form-group">
		{!! Form::label('status','Status',null,['class'=>'form-control']) !!}<br/>
		{!! Form::checkBox('status',null,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Add',null,['class'=>'form-control']) !!}
		<a href="{{ route('item.index') }}" class="btn btn-default">Home</a>
	</div>
	{!! Form::close() !!}
@endsection