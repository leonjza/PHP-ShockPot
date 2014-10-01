<?php

class StatsController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Stats Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the viewing of statics and details about attempts
	| to the honeypot
	|
	*/

	public function getAll()
	{

		// Get the attempts and eager load the suspect headers
		$attempts = Attempt::with(array('suspect_headers'))
			->paginate(20);

		return View::make('stats')
			->with('attempts', $attempts);
	}

	public function getView($id)
	{

		$details = Attempt::with('full_headers')->findOrFail($id);

		return View::make('details')
			->with('details', $details)
			->with('full_headers', json_decode($details->full_headers->headers));
	}

}
