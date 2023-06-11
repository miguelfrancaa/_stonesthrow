 <?php

 	require("includes/admin_controller.php");
	require("models/events.php");

	$model = new Events();

	require("models/artists.php");

	$modelArtists = new Artists();

	$artists = $modelArtists->getArtists();

	$artists_name = [];

	foreach($artists as $artist){
		$artists_names[] = $artist["name"];
	}

	if(isset($_POST["send"])){

		$event = $model->newEvent( $_POST );

		header("Location: /admin_events");
	}	

	require("views/new_event.php");
?>