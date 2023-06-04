<?php
	
	$allowed_options = ["products", "categories", "users", "orders"];

	if(isset($url_parts[2])){
		$option = $url_parts[2];
	}

	if(!empty($url_parts[3])) {
		$resource_id = $url_parts[3];
	}

	if(isset($_POST["send"]) && empty($option) && $_SESSION["csrf_token"] === $_POST["csrf_token"]){
		require("models/admins.php");

		$adminModel = new Admins();

		$admin = $adminModel->login( $_POST );

		if(!empty($admin)){
			$_SESSION["admin_id"] = $admin["admin_id"];
		}else{
			http_response_code(401);

			echo "Dados incorretos";
		}
	}

	$_SESSION["csrf_token"] = bin2hex(random_bytes(16));

	if(!isset($_SESSION["admin_id"])) {
		http_response_code(401);

		require("views/adminlogin.php");

		exit;
	}

	require("views/adminsmenu.php");
?>