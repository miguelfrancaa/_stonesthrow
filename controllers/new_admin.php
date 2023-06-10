<?php
	require("includes/admin_controller.php");

	if(isset($_POST["send"])){
		foreach($_POST as $key => $value) {
			$_POST[ $key ] = trim(htmlspecialchars(strip_tags($value)));
		}

		if(isset($_POST["name"]) &&
			isset($_POST["email"]) &&
			isset($_POST["password"]) &&
			filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) &&
			$_POST["password"] === $_POST["repeatPassword"]){

			require("models/admins.php");

			$modelAdmins = new Admins();

			$admin = $modelAdmins->createAdmin($_POST);

			header("Location:/admin_admins");


		}
	}

	require("views/new_admin.php")
?>