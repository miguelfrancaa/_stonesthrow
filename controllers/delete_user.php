<?php
	require("models/users.php");

	$model = new Users();

	$user = $model->deleteUser( $_POST["user_id"] );

	header("Location: /admin_users")
?>