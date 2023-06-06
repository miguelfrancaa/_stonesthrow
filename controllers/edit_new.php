<?php
	require("includes/admin_controller.php");
	require("models/news.php");

	$model = new News();

	$new = $model->newToEdit($id);

	if(isset($_POST["send"])){

		move_uploaded_file($_FILES["new_image"]["tmp_name"], "img/news/" . $_FILES["new_image"]["name"]);
		move_uploaded_file($_FILES["new_imageCarroussel"]["tmp_name"], "img/news/" . $_FILES["new_imageCarroussel"]["name"]);

		$new = $model->updateNew($_POST);

		header("Location: /admin_news");
	}

	require("views/edit_new.php");

?>