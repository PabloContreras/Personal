@extends('Layout.app')

@section('body')
	<br>
	<center><div">
		<br><br>
		<H1><span>{{$item->body}}</span></H1>
		<br> <br>
		<a href="/tweet" class="btn btn-info">Regresar</a>
		<br><br><br>
	</div></center>
@endsection