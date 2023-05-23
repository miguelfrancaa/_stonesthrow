<?php

	if(!isset($id) || !is_numeric($id)) {
		http_response_code(400);
		header("Location: /400");
		die("Request Invalido");
	}

	require("models/artists.php");

	$model = new Artists();

	$artist = $model->getArtistsDetails($id);

	if(empty($artist)) {
		http_response_code(404);
		header("Location: /404");
		die("Request Invalido");
	}

	require("views/artist.php");