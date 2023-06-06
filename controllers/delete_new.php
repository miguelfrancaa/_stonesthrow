<?php
	require("includes/admin_controller.php");

	require("models/news.php");

	$model = new News();

	$new = $model->deleteNew( $_POST["new_id"] );

	header("Location: /admin_news")
?>