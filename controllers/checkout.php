<?php
	if(!isset($_SESSION["user_id"])) {

		header("Location: /login/");
		exit;

	}

	if(empty($_SESSION["cart"])){
		header("Location: /cart/");
		exit;
	}
?>