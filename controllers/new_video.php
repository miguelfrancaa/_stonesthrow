 <?php
 require("includes/admin_controller.php");
 
	require("models/videos.php");

	$model = new Videos();

	if(isset($_POST["send"])){

		$event = $model->newVideo( $_POST );

		header("Location: /admin_videos")
	}	

	require("views/new_video.php");
?>