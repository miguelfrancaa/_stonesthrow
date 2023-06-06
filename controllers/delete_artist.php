<?php
	require("includes/admin_controller.php");

	require("models/artists.php");

	$model = new Artists();

	$artist = $model->deleteArtist( $_POST["artist_id"] );

	header("Location:/admin_artists")
?>