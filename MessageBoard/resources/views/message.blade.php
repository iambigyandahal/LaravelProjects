@extends('layouts.header')

@section('body')
	<div class="content">
		<h1>{{ $message->title }}</h1>
		<small>posted on {{ $message->created_at->format('Y-m-d H:i:s') }} by {{ $message->author }}</small><br>
		<p>{{ $message->content }}</p>
	</div>	
</body>
</html>

@endsection