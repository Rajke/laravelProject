@extends('app')
@section('content')
	<div class="table-responsive"><br/>
	<table style="width:100%" class="table-striped table-hover table" >
	 <tr class="info">
            <th>Username</th>
            <th>Title</th>
            <th>Description</th>
            <th>Time of creation</th>
          </tr>
	
		<tr >
		<td class="info">
			{{ $item->user->name }}
		</td>
		
		<td>
			<p>
			{{ $item->title }}
			</p>
		</td>

		<td>
			<p>
				{{ $item->description }}
			</p>
		</td>
		<td>
			{{ $item->created_at->format('F d, Y h:ia') }} 
		</td>
		</tr>
		</table>
@endsection