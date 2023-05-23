<?php
	require("models/artists.php");

	$model = new Artists();

	$photoArtists = $model->errorPhoto();

	require("views/404.php");
?>