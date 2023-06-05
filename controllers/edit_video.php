<?php
	require("models/videos.php");

	$model = new Videos();

	$video = $model->videoToEdit($id);

	if(isset($_POST["send"])){

		$video = $model->updateVideo($_POST);

		//header("Location: /admin_products");
	}

	require("views/edit_video.php");

	print_r($_POST);

	print_r($_FILES);

?>