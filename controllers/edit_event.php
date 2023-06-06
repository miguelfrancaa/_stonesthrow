<?php
	require("includes/admin_controller.php");

	require("models/events.php");

	$model = new Events();

	$event = $model->eventToEdit($id);

	if(isset($_POST["send"])){

		$event = $model->updateEvent($_POST);

		header("Location: /admin_events");
	}

	require("views/edit_event.php");

?>