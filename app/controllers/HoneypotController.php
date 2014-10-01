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

	public function getIndex()
	{

		$shocking = array();

		// Lets try and detect an attempt in the headers.
		// Ref: http://git.savannah.gnu.org/cgit/bash.git/tree/variables.c?id=eafc91a3506a082956fbdc8f0fb1210d00f1e035#n341
		foreach (Request::header() as $header => $value)
			if (str_contains($value[0], '() {'))	# yep - as lame as () {
				$shocking[] = $header;

		// If we have some shocking news, lets log it
		if (count($shocking) > 0) {

			// Record the attempt
			$attempt = new Attempt;
			$attempt->remote_ip = Request::getClientIp();
			$attempt->requested_url = str_limit(Request::url(), 147, '...');
			$attempt->save();

			// Record the full request headers
			$full_headers = new FullHeader;
			$full_headers->headers = json_encode(Request::header());
			$attempt->full_headers()->save($full_headers);

			// Lets loop over the shocking headers and save this
			// content too
			foreach ($shocking as $header) {

				$suspect_header = new SuspectHeader;
				$suspect_header->header = str_limit($header, 147, '...');
				$suspect_header->content = str_limit(Request::header($header), 147, '...');
				$attempt->suspect_headers()->save($suspect_header);
			}
		}

		return View::make('shock')
			->with('detections', $shocking)
			->with('headers', Request::header());
	}

}
