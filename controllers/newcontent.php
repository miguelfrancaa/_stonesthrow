<?php

	if(!isset($id) || !is_numeric($id)) {
		http_response_code(400);
		include('400.php');
		die();
	}

	require("models/news.php");

	$model = new News();

	$news = $model->getNewsContent($id);

	if(empty($news)) {
		http_response_code(404);
		include('404.php');
		die();
	}

	require("views/newcontent.php");


?>