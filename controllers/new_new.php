<?php
	require("models/news.php");

	$model = new News();

	if(isset($_POST["send"])){

		move_uploaded_file($_FILES["new_image"]["tmp_name"], "img/news/" . $_FILES["new_image"]["name"]);

		move_uploaded_file($_FILES["new_imageCarroussel"]["tmp_name"], "img/news/" . $_FILES["new_imageCarroussel"]["name"]);


		$new = $model->newNew( $_POST );
	}	

	require("views/new_new.php");
?>