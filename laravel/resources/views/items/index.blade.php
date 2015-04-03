@extends('app')
@section('content')
	<a href="{{ route('item.create') }}" class="btn btn-success">Add new item</a>
	<div class="table-responsive"><br/>
	<table style="width:100%" class="table-striped table-hover table" >
	 <tr >
            <th>Username</th>
            <th>Title</th>
            <th>Description</th>
            <th>Time of creation</th>
          </tr>
	@foreach($items as $item)
		<div class="col-md-12">
                            <tr data-id-itema = "{{ $item->id }}" class="js-item-row">
                            	<td class="info" >
                                    {{ $item->user->name }}
                                </td>
                                <td class="js-title" >
                                    {{ $item->title }}
                                </td>
                                <td class="active js-desc"  >
                                    {{ $item->description }}
                                </td>
                    
                                <td class="js-time">
                                    {{ $item->updated_at}}
                                </td>
                                
                                <td class="btn-save"  data-id-itema = "{{ $item->id }}">
                                </td>
                                <td class="btn-cancel">
                                </td>
                                <td>
                                    <button class="btn btn-default js-obrisi" data-id-itema="{{ $item->id }}">Obrisi</button>
                                </td>
                            </tr>
                        
                    </div>
	@endforeach
</table>
	</div>
	<button id="nov" class="btn btn-success">Add new(2)</button>
	<div id="inputi" form-group>
	</div>
@endsection


@section('scripts')
    <script type="text/javascript" src="assets/javascript/main.js"></script>
    <script type="text/javascript">
       window._laravel_token = "{{{ csrf_token() }}}";
       window._laravel_user = {!! $user->toJson() !!}; 
   </script> 
@endsection