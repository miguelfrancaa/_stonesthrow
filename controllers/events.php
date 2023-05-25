<?php
	require("models/events.php");

	$model = new Events();

	$events = $model->getEvents();

	require("views/events.php");
?>