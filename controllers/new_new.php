<?php
	require("includes/admin_controller.php");

	require("models/news.php");

	$model = new News();

	require("models/artists.php");

	$modelArtists = new Artists();

	$artists = $modelArtists->getArtists();

	$artists_name = [];

	foreach($artists as $artist){
		$artists_names[] = $artist["name"];
	}

	if(isset($_POST["send"])){

		move_uploaded_file($_FILES["new_image"]["tmp_name"], "img/news/" . $_FILES["new_image"]["name"]);

		move_uploaded_file($_FILES["new_imageCarroussel"]["tmp_name"], "img/news/" . $_FILES["new_imageCarroussel"]["name"]);


		$new = $model->newNew( $_POST );

		header("Location: /admin_news");
	}	

	require("views/new_new.php");
?>