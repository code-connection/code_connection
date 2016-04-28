<?php



use Abraham\TwitterOAuth\TwitterOAuth;


public function returnTweets(lat,long,language){


	$connection = new TwitterOAuth($_ENV['CONSUMER_KEY'], $_ENV['CONSUMER_SECRET'], $_ENV['ACCESS_TOKEN'], $_ENV['ACCESS_TOKEN_SECRET']);
	$content = $connection->get("account/verify_credentials");


	//GET "https://api.twitter.com/1.1/search/tweets.json?geocode="+lat+","+long+",60mi&count=100&q="+language"
	$d = $connection->get("search/tweets", ["geocode" => "lat,long,60mi", "count" => "100", "q" => "language"]);

	return $d;
}

?>