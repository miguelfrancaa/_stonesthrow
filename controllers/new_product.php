<?php
	require("includes/admin_controller.php");

	require_once("models/products.php");

	$model = new Products();

	if(isset($_POST["send"])){

		foreach($_POST as $key => $value) {
			$_POST[ $key ] = trim(htmlspecialchars(strip_tags($value)));
		}

		if (isset($_POST["product_item"]) &&
			isset($_POST["product_type"]) &&
			isset($_POST["product_description"]) &&
			isset($_POST["product_price"]) &&
			isset($_POST["product_stock"]) &&
			isset($_POST["product_category"]) &&
			mb_strlen($_POST["product_item"]) >= 3 &&
			mb_strlen($_POST["product_item"]) <= 50  &&
			mb_strlen($_POST["product_type"]) >= 3 &&
			mb_strlen($_POST["product_type"]) <= 50 &&
			mb_strlen($_POST["product_price"]) > 0) {

			move_uploaded_file($_FILES["product_image"]["tmp_name"], "img/products/" . $_FILES["product_image"]["name"]);

			$product = $model->newProduct( $_POST );

			header("Location: /admin_products");
		}else{
			echo 'Prencha os dados corretamente.';
		}
	}	

	require("views/new_product.php");
?>