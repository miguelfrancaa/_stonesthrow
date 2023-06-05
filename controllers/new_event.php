 <?php
	require("models/events.php");

	$model = new Events();

	if(isset($_POST["send"])){

		$event = $model->newEvent( $_POST );
	}	

	require("views/new_event.php");
?>