<?php
	require("includes/admin_controller.php");
	require("models/news.php");

	$model = new News();

	$new = $model->newToEdit($id);

	require("models/artists.php");

	$modelArtists = new Artists();

	$artists = $modelArtists->getArtists();

	$artists_name = [];

	foreach($artists as $artist){
		$artists_names[] = $artist["name"];
	}

	if(isset($_POST["send"])){

		foreach($_POST as $key => $value) {
			$_POST[ $key ] = trim(htmlspecialchars(strip_tags($value)));
		}

		if (isset($_POST["new_title"]) &&
			isset($_POST["new_content"]) &&
			isset($_POST["new_content2"]) &&
			mb_strlen($_POST["new_title"]) >= 5 && 
			mb_strlen($_POST["new_title"]) <= 50 &&
			file_exists($_FILES['new_image']['tmp_name']) || is_uploaded_file($_FILES['new_image']['tmp_name'])) {
			
			move_uploaded_file($_FILES["new_image"]["tmp_name"], "img/news/" . $_FILES["new_image"]["name"]);
			move_uploaded_file($_FILES["new_imageCarroussel"]["tmp_name"], "img/news/" . $_FILES["new_imageCarroussel"]["name"]);

			$new = $model->updateNew($_POST);

			header("Location: /admin_news");
		}else{
			echo "Por favor preencha os dados corretamente.";

			header("Location: /edit_new/". $_POST["new_id"] ."");
		}
	}

	require("views/edit_new.php");

?>