<?php

class HoneypotController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Honeypot Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the requests to your server and tries to identify
	| ones that have "bashbug" / "shellshock" related requests in them.
	|
	*/

	public function getShock()
	{

		$shocking = array();

		// Test
		$shocking[] = "connection";
		$shocking[] = "host";

		// Lets try and detect an attempt in the headers
		foreach (Request::header() as $header => $value)
			if (str_contains($value[0], '() {'))
				$shocking[] = $header;

		return View::make('shock')
			->with('detections', $shocking)
			->with('headers', Request::header());
	}

}
