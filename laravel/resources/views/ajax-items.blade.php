<!DOCTYPE html>
<html>
<head>

	<title>JS test</title>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body onload="date(), dani()">
<div>
	
		<h2>Hello World</h2>
		
		<ul id="postslist"><li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li></ul>
		<ul><li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li></ul>

		<button class="js-try-it">Try it!</button>
		<button class="js-poz">Pozdrav</button>

		<p id="demo2"></p>
		<p id="demo"></p>
		<p id="demo3"></p>
		
		<button class="js-vocke">Vocke</button>

		<div id="voce">
		</div>


		<div id="dani">
		</div>

		<form name="nForma" action="" onsubmit="return forma()" method="post"><input type="text" id="ime" value="" required>
		</form>
		
		<button class="buton">Buton prikazi</button>

		<div id="imeShow">
		</div>
</div>
<table class="table-striped table-hover table">
	<th>ID Item</th><th>Title</th>
		<tr>
			<td id="area1"></td>
			<td id="area2"></td>
		</tr>
</table>

<button id="callapi" class="btn btn-primary">Get post
</button>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="assets/javascript/main.js"></script>
</body>
</html>