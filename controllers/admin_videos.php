<?php
	require("includes/admin_controller.php");

	require("models/videos.php");

	$model = new Videos();

	$videos = $model->listVideos();

	require("views/admin_videos.php");
?>