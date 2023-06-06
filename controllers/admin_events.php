<?php
	require("includes/admin_controller.php");

	require("models/events.php");

	$model = new Events();

	$events = $model->listEvents();

	require("views/admin_events.php");
?>