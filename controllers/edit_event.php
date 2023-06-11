<?php
	require("includes/admin_controller.php");

	require("models/events.php");

	$modelEvents = new Events();

	$event = $modelEvents->eventToEdit($id);

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

		if (isset($_POST["event_local"]) &&
			isset($_POST["event_date"]) &&
			isset($_POST["event_mode"]) &&
			isset($_POST["event_link"]) &&
			mb_strlen($_POST["event_local"]) >= 3 &&
			mb_strlen($_POST["event_local"]) <= 32 &&
			mb_strlen($_POST["event_mode"]) >= 3 &&
			mb_strlen($_POST["event_mode"]) <= 32 &&
			mb_strlen($_POST["event_link"]) >= 3 &&
			mb_strlen($_POST["event_link"]) <= 255 
			) {

				$event = $modelEvents->updateEvent($_POST);

				header("Location: /admin_events");
				
		}else{
			echo 'Por favor preencha os dados corretamente.';
		}
	}

	require("views/edit_event.php");

?>