<?php
	require("includes/admin_controller.php");

	require_once("models/artists.php");

	$model = new Artists();

	$artist = $model->artistToEdit($id);

	if(isset($_POST["send"])){

		foreach($_POST as $key => $value) {
			$_POST[ $key ] = trim(htmlspecialchars(strip_tags($value)));
		}

		if (isset($_POST["artist_name"]) &&
			isset($_POST["artist_description"]) &&
			file_exists($_FILES['artist_photo']['tmp_name']) || is_uploaded_file($_FILES['artist_photo']['tmp_name']) &&
			file_exists($_FILES['artist_descriptionphoto']['tmp_name']) || is_uploaded_file($_FILES['artist_descriptionphoto']['tmp_name']) &&
			mb_strlen($_POST["artist_name"]) >= 2 &&
			mb_strlen($_POST["artist_name"]) <= 50
			) {

			move_uploaded_file($_FILES["artist_photo"]["tmp_name"], "img/artists/" . $_FILES["artist_photo"]["name"]);

			move_uploaded_file($_FILES["artist_descriptionphoto"]["tmp_name"], "img/artists/" . $_FILES["artist_descriptionphoto"]["name"]);

			$artist = $model->updateArtist($_POST);

			header("Location: /admin_artists");

		}else{
			echo 'Preencha os dados corretamente.';
		}

	}

	require("views/edit_artist.php");

?>