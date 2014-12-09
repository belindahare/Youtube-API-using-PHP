<?php
	require_once('lwYoutube.php');
	$youtube = new lwYoutube();
	$subscribers = $youtube->getSubscribers();
	print_r($subscribers);
?>
