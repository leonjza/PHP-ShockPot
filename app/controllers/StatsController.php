<?php

class StatsController extends BaseController {

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

		return View::make('stats')
			->with('headers', Request::header());
	}

}
