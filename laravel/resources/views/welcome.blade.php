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
	<table style="width:100%" >	
	 <tr class="info" >
            <th>Username</th>
            <th>Title</th>
            <th>Time of creation</th>
          </tr>
	@foreach($items as $item)

	
	
		<tr >
		<td class="info">
			{{ $item->user->name }}
		</td>
		
		<td>
			<p>
			<a href="{{ route('item.show',$item->id) }}">{{ $item->title }}</a>
			</p>
		</td>
		<td>
			{{ $item->created_at->format('F d, Y h:ia') }} 
		</td>
		</tr>
	@endforeach
	
</table>
	</div>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="assets/javascript/main.js"></script>
	</body>
</html>
