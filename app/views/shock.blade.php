@extends('layouts.default')

@section('page_content')

<div class="inner cover">
  <h1 class="cover-heading">PHP-ShockPot</h1>
  <p class="lead">Try a "ShellShock" request to this Honeypot.</p>
</div>

@if (count($detections) > 0)
<div class="">
  <h1><p class="text-danger">Shellshock exploit attempt detected!</p></h1>

  <p class="text-warning"> The following headers contained suspect payloads:</p>
  <ul class="list-unstyled">
  	@foreach($detections as $header)
  		<li>
  			<pre>{{ e($header) }}: {{ e($headers[$header][0]) }}</pre>
  		</li>
  	@endforeach
  </ul>
  <small>This request has been logged.</small>
</div>
@endif

<br>
<p class="text-center">
  <img src="https://pbs.twimg.com/media/ByXw51ZIcAATTKu.png:large" class="img-rounded">
</p>
@stop
