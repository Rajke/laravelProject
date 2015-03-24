@extends('app')
@section('content')
	<a href="{{ route('item.create') }}" class="btn btn-success">Add new item</a>
	<div class="table-responsive"><br/>
	<table style="width:100%" class="table-striped table-hover table" >
	 <tr>
            <th>Username</th>
            <th>Title</th>
            <th>Description</th>
          </tr>
	@foreach($items as $item)
		<tr>
		<td>
			{{ $item->user->name }}
		</td>
		
		<td>
			<p>
			{{ $item->title }}
			</p>
		</td>

			<td><p>{{ $item->description }}</p></td>
			<td><a href="{{ route('item.edit', $item->id) }}" class="btn btn-primary">EDIT</a></td>
			<td>{!! Form::open(['route' => ['item.destroy', $item->id], 'method' => 'DELETE']) !!}
			{!! Form::submit('DELETE', ['class' => 'btn btn-danger']) !!}
			{!! Form::close() !!}
			</td>
			</tr>
	@endforeach
</table>
	</div>
@endsection