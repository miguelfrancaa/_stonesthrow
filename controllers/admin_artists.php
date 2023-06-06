 <?php
 	require("includes/admin_controller.php");

	require("models/artists.php");

	$model = new Artists();

	$artists = $model->listArtists();

	require("views/admin_artists.php");
?>