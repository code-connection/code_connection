<?php


// require_once __DIR__ . '/../../vendor/blobaugh/Meetup.php';



class MeetupController extends BaseController {

	public function returnMeetups(){

		$input = Input::all();

		$city = Input::get('city');
		
		$text = Input::get('text');

		$api_key = $_ENV['MEETUP_API_KEY'];
		

		$connection = new MeetupKeyAuthConnection($api_key);

		$m = new MeetupEvents($connection);

		$events = $m->getOpenEvents( array( 'text' => $text, 'city' => $city));

		// foreach($events as $e) {
    
  //   		echo $e['name'] . " at " . date(DATE_W3C, $e['time']/1000) . "<br>";
		// }

		return Response::json($events);
		
	}

}

?>