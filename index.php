<?php
	session_start();

	$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

	define("ENV", parse_ini_file(".env"));

	$controller = "home";

	if(!empty($url_parts[1])) {
		$controller = $url_parts[1];
	}

	if(!empty($url_parts[2])) {
		$id = $url_parts[2];
	}

	if(!empty($url_parts[3])) {
	$resource_id = $url_parts[3];
	}


	require("controllers/" . $controller . ".php");
	
?>