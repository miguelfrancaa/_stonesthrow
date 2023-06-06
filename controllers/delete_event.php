<?php
	require("includes/admin_controller.php");

	require("models/events.php");

	$model = new Events();

	$event = $model->deleteEvent( $_POST["event_id"] );

	header("Location:/admin_events")
?>