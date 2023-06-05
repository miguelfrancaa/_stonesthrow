 <?php
	require("models/videos.php");

	$model = new Videos();

	if(isset($_POST["send"])){

		$event = $model->newVideo( $_POST );
	}	

	require("views/new_video.php");
?>