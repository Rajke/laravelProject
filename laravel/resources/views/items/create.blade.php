@extends('app')
@section('content')
	<a href="{{ route('item.index') }}" class="btn btn-primary">BACK</a>	
	{!! Form::open(['route' => 'item.store']) !!}
	<div class="form-group">
	<br/>
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
		{!! Form::submit('Add',['class'=>'btn btn-success' ]) !!}
	</div>
	{!! Form::close() !!}
@endsection