<?php
	require("models/news.php");

	$model = new News();

	$news = $model->getNewsHome();

	require("views/home.php");
?>