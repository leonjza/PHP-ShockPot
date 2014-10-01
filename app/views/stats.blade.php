@extends('layouts.default')

@section('page_content')

<div class="inner cover">
	<h1 class="cover-heading">"ShockPot" Stats.</h1>
	<p class="lead">Below is a table of entries for all of the "ShellShocker" related activity that has been detected on this honeypot.</p>
</div>

@if (count($attempts) > 0)

	<table class="table table-condensed">
		<thead>
			<th>Attempt ID</th>
			<th>Created At</th>
			<th>Requested URL</th>
			<th>Remote IP</th>
			<th>Payloads</th>
			<th></th>
		</thead>
		<tbody>
			@foreach ($attempts as $attempt)
				<tr>
					<td>{{ $attempt->id }}</td>
					<td>{{ $attempt->created_at }} ({{ Carbon\Carbon::parse($attempt->created_at)->diffForHumans() }})</td>
					<td>{{ e($attempt->requested_url) }}</td>
					<td>{{ $attempt->remote_ip }}</td>
					<td>
						@foreach($attempt->suspect_headers as $header)
							{{ e($header->header) }} : <code>{{ e($header->content) }}</code>
						@endforeach
					</td>
					<td><a href="{{ action('StatsController@getView', array('id' => $attempt->id)) }}">
						<span class="glyphicon glyphicon-collapse-up"></span> Details</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<div>{{ $attempts->links() }}</div>

@else

No attempts are known of yet... Just wait a little longer :)

@endif

@stop
