 <?php

 	require("includes/admin_controller.php");
	require("models/events.php");

	$model = new Events();

	if(isset($_POST["send"])){

		$event = $model->newEvent( $_POST );

		header("Location: /admin_events");
	}	

	require("views/new_event.php");
?>