@extends('app')
@section('content')
	<link rel="stylesheet" href="dist/magnific-popup.css"> 


	<button id="open-popup">Open popup</button>

	<div id="my-popup" class="mfp-hide white-popup">
	  Inline popup
	</div>


	
@endsection


@section('scripts')
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/javascript/side.js"></script>
	<script type="text/javascript" src="dist/jquery.magnific-popup.js"></script>
@endsection