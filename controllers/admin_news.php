<?php
	require("includes/admin_controller.php");

	require("models/news.php");

	$model = new News();

	$news = $model->listNews();

	require("views/admin_news.php");
?>