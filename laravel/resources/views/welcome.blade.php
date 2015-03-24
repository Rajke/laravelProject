<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

	<!--<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: black;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>-->
	</head>
	<body>
	<div class="table-responsive"><br/>
	<table class="table-striped table-hover table" >
	 <tr class="info">
            <th>Title</th>
          </tr>
	@foreach($items as $item)
		<tr >
		<td>
			<p>
			<a href="{{ route('item.show',$item->id) }}">{{ $item->title }}</a>
			</p>
		</td>
		<td>
			{{ $item->created_at->format('F d, Y h:ia') }} 
		</td>
	@endforeach
</table>
	</div>
	</body>
</html>
