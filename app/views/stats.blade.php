@extends('layouts.default')

@section('page_content')

<div class="inner cover">
	<h1 class="cover-heading">"ShockPot" Stats.</h1>
	<p class="lead">Below is a table of entries for all of the "ShellShocker" related activity that has been detected on this honeypot.</p>
	<p class="lead">
	  <a href="#" class="btn btn-lg btn-default">Learn more</a>
	</p>
</div>

@if (count($attempts) > 0)

	<table class="table table-condensed">
		<thead>
			<th>Attempt ID</th>
			<th>Created At</th>
			<th>Remote IP</th>
			<th>Payloads</th>
		</thead>
		<tbody>
			@foreach ($attempts as $attempt)
				<tr>
					<td>{{ $attempt->id }}</td>
					<td>{{ $attempt->created_at }}</td>
					<td>{{ $attempt->remote_ip }}</td>
					<td>
						@foreach($attempt->suspect_headers as $header)
							{{ $header->header }} : <code>{{ $header->content }}</code>
						@endforeach
					</td>
					<td><a href="{{ action('StatsController@getView', array('id' => $attempt->id)) }}">Details</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<div>{{ $attempts->links() }}</div>

@else

No attempts are known of yet... Just wait a little longer :)

@endif

@stop
