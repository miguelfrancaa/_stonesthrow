<?php
	require("models/artists.php");

	$model = new Artists();

	if(isset($_POST["send"])){

		move_uploaded_file($_FILES["artist_photo"]["tmp_name"], "img/artists/" . $_FILES["artist_photo"]["name"]);

		move_uploaded_file($_FILES["artist_descriptionphoto"]["tmp_name"], "img/artists/" . $_FILES["artist_descriptionphoto"]["name"]);

		$artist = $model->newArtist( $_POST );
	}	

	require("views/new_artist.php");
?>