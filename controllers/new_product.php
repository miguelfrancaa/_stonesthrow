<?php
	require("includes/admin_controller.php");

	require_once("models/products.php");

	$model = new Products();

	if(isset($_POST["send"])){

		move_uploaded_file($_FILES["product_image"]["tmp_name"], "img/products/" . $_FILES["product_image"]["name"]);


		$product = $model->newProduct( $_POST );

		header("Location: /admin_products")
	}	

	require("views/new_product.php");
?>