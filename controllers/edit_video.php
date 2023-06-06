<?php
	require("includes/admin_controller.php");
	
	require("models/videos.php");

	$model = new Videos();

	$video = $model->videoToEdit($id);

	if(isset($_POST["send"])){

		$video = $model->updateVideo($_POST);

		header("Location: /admin_videos");
	}

	require("views/edit_video.php");

?>