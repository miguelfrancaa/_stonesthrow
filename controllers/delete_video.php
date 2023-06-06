<?php
	require("includes/admin_controller.php");
	require("models/videos.php");

	$model = new Videos();

	$video = $model->deleteVideo( $_POST["video_id"] );

	header("Location: /admin_videos")
?>