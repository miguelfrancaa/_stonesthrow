 <?php
 	require("includes/admin_controller.php");

	require("models/users.php");

	$model = new Users();

	$users = $model->listUsers();

	require("views/admin_users.php");
?>