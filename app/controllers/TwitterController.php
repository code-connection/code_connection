<?php



use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterController extends BaseController {

	public function returnTweets(){

		$input = Input::all();


		//validator for both count and language
		//if too many 200-300, >300


		$connection = new TwitterOAuth($_ENV['CONSUMER_KEY'], $_ENV['CONSUMER_SECRET'], $_ENV['ACCESS_TOKEN'], $_ENV['ACCESS_TOKEN_SECRET']);
		$content = $connection->get("account/verify_credentials");
		

		//GET "https://api.twitter.com/1.1/search/tweets.json?geocode="+lat+","+long+",60mi&count=100&q="+language"
		$d = $connection->get("search/tweets", ["count" => 100, "q" => $input['language'], "geocode" => $input['lat'],$input['long'],60mi ]);

		return Response::json($d->statuses);
	}

}

?>