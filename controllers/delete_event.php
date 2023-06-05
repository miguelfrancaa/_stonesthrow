<?php
	require("models/events.php");

	$model = new Events();

	$event = $model->deleteEvent( $_POST["event_id"] );

	//header("Location:/admin_products")

	print_r($_POST);
?>