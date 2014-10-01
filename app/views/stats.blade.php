@extends('layouts.default')

@section('page_content')

<div class="inner cover">
	<h1 class="cover-heading">"ShockPot" Statistics.</h1>
	<p class="lead">Below is a table of entries for all of the "ShellShocker" related activity that has been detected on this honeypot.</p>
	<p class="lead">
	  <a href="#" class="btn btn-lg btn-default">Learn more</a>
	</p>
</div>

<table class="table table-condensed">
	<thead>
		<th>Header</th>
		<th>Content</th>
	</thead>
	<tbody>
		@foreach ($headers as $header => $content)
			<tr>
				<td>{{ $header }}</td>
				<td>{{ $content[0] }}</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop
