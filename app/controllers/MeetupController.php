<?php


// require_once __DIR__ . '/../../vendor/blobaugh/Meetup.php';



class MeetupController extends BaseController {

	public function returnMeetups(){

		$input = Input::all();

		$city = Input::get('city');

		$lat = Input::get('lat');

		$lon = Input::get('lon');
		
		$text = Input::get('text');

		$status = 'upcoming';

		$radius = 60;

		$api_key = $_ENV['MEETUP_API_KEY'];


		$connection = new MeetupKeyAuthConnection($api_key);

		$m = new MeetupEvents($connection);

		$events = $m->getOpenEvents( array( 'text' => $text, 'lat' => $lat, 'lon' => $lon, 'radius' => $radius ));

		return Response::json($events);
		
	}

}

?>