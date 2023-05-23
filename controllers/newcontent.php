<?php

	if(!isset($id) || !is_numeric($id)) {
		http_response_code(400);
		header("Location: /400");
		die("Request Invalido");
	}

	require("models/news.php");

	$model = new News();

	$news = $model->getNewsContent($id);

	if(empty($news)) {
		http_response_code(404);
		header("Location: /404");
		die("Request Invalido");
	}

	require("views/newcontent.php");


?>