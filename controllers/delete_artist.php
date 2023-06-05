<?php
	require("models/artists.php");

	$model = new Artists();

	$artist = $model->deleteArtist( $_POST["artist_id"] );

	//header("Location:/admin_products")

	print_r($_POST);
?>