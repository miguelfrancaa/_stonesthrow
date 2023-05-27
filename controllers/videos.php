<?php
	require("models/videos.php");

	$model = new Videos();

	$videos = $model->getVideos();

	require("views/videos.php");
?>