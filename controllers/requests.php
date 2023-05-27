<?php
	require("includes/config.php");

	header("Content-Type: application/json");

	if(isset($_POST["request"])){
		if($_POST["request"] === "removeProduct" && !empty($_POST["product_id"]) && is_numeric($_POST["product_id"])){
			unset($_SESSION["cart"][$_POST["product_id"]]);

			echo'{"status":"OK"}';
		}

		if(
			$_POST["request"] === "changeQuantity" &&
			!empty($_POST["product_id"]) &&
			is_numeric($_POST["product_id"]) &&
			!empty($_POST["quantity"]) &&
			is_numeric($_POST["quantity"]) &&
			intval($_POST["quantity"]) > 0
		){
			$_SESSION["cart"][ intval($_POST["product_id"]) ]["quantity"] = intval($_POST["quantity"]);

			echo '{"status: "OK"}';
		}
	}
?>