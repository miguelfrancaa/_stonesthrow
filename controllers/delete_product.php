<?php
	require_once("models/products.php");

	$model = new Products();

	$product = $model->deleteProduct( $_POST["product_id"] );

	header("Location: /admin_products")
?>