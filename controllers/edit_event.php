<?php
	require("models/events.php");

	$model = new Events();

	$event = $model->eventToEdit($id);

	if(isset($_POST["send"])){

		$event = $model->updateEvent($_POST);

		//header("Location: /admin_products");
	}

	require("views/edit_event.php");

	print_r($_POST);

	print_r($_FILES);

?>