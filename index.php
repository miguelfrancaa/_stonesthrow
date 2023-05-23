<?php
	$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

	define("ENV", parse_ini_file(".env"));

	$controller = "home";

	if(!empty($url_parts[1])) {
		$controller = $url_parts[1];
	}

	require("controllers/" . $controller . ".php");
	
?>