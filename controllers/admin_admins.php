 <?php
 	require("includes/admin_controller.php");

	require("models/admins.php");

	$model = new Admins();

	$admins = $model->listAdmins();

	require("views/admin_admins.php");
?>