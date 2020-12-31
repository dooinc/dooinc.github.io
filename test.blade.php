@extends('layouts.master')

@section('content')
	<h1>Testing</h1>

	@if ($results->count() > 0)
		@foreach ($results as $item)
			<p>{{ $item->title }}</p>
		@endforeach
	@endif
@endsection
