<?php

	require("models/news.php");

	$model = new News();

	$news = $model->getAllNews();

	require("views/news.php");

?>