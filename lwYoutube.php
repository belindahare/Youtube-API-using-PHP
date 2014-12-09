<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

class lwYoutube{
	public $subscribers;

	function lwYoutube(){
		date_default_timezone_set('America/New_York');
		$this->subscribers = array();
	}

	function getSubscribers(){
		$url = 'http://gdata.youtube.com/feeds/api/users/violetdailypill?v=2&alt=json';
		$youTube = file_get_contents($url);
		$youtubeData = json_decode($youTube, TRUE);
		$this->subscribers['SUBSCRIBERS'] = $youtubeData['entry']['yt$statistics']['subscriberCount'];
		$this->subscribers['DATE'] = date('Y-m-d');
		return $this->subscribers;
	}
}

?>
