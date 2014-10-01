@extends('layouts.default')

@section('page_content')

@if (count($detections) > 0)
<div class="">
  <h1><p class="text-danger">Shellshock exploit attempt detected!</p></h1>

  <p class="text-warning"> The following headers contained suspect payloads:</p>
  <ul class="list-unstyled">
  	@foreach($detections as $header)
  		<li>
  			<pre>{{ $header }}: {{ $headers[$header][0] }}</pre>
  		</li>
  	@endforeach
  </ul>
  <small>This request has been logged.</small>
</div>
@endif

@stop
