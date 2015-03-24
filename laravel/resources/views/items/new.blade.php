@extends('app')

@section('content')

{!! Form::open(array('route' => 'items.store'))!!}
	<p>
		{!! Form::label('title','Title') !!}<br/>
		{!! Form::text('title') !!}
	</p>
	<p>
		{!! Form::label('desc','Description') !!}<br/>
		{!! Form::textarea('description') !!}
	</p>
	<p>
		{!! Form::label('status','Status') !!}<br/>
		{!! Form::checkBox('status') !!}
	</p>
	<p>
		{!! Form::submit('Add') !!}
	</p>

	{!! Form::close() !!}

@endsection