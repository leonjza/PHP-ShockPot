@extends('layouts.default')

@section('page_content')

<div class="inner cover">
	<h1 class="cover-heading">Details for entry {{ $details->id }} </h1>
	<p class="lead">
		Below is the header details for the suspect request received from
		{{ $details->remote_ip }} to {{ e($details->requested_url) }} on
		{{ $details->created_at }} ({{ Carbon\Carbon::parse($details->created_at)->diffForHumans() }}).
	</p>
</div>

<table class="table table-hover">
	<thead>
		<th>Header</th>
		<th>Content</th>
	</thead>
	<tbody>
		@foreach($full_headers as $header => $content)
			<tr>
				<td>{{ str_limit(e($header), 150, '...') }}</td>
				<td>: <code>{{ str_limit(e($content[0]), 150, '...') }}</code></td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop
