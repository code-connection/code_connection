<?php



use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterController extends BaseController {

	public function returnTweets(){

		$input = Input::all();
		$geocode = Input::get('geocode');
		$count = Input::get('count');
		$language = Input::get('language');


		//validator for both count and language
		//if too many 200-300, >300


		$connection = new TwitterOAuth($_ENV['CONSUMER_KEY'], $_ENV['CONSUMER_SECRET'], $_ENV['ACCESS_TOKEN'], $_ENV['ACCESS_TOKEN_SECRET']);
		$content = $connection->get("account/verify_credentials");
		

		//GET "https://api.twitter.com/1.1/search/tweets.json?geocode="+lat+","+long+",60mi&count=100&q="+language"
		$statuses = $connection->get("search/tweets", ["geocode" => $geocode, "count" => $count, "q" => $language]);

		return Response::json($statuses);
	}

}

?>