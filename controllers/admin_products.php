<?php
	require("includes/admin_controller.php");

	require_once("models/products.php");

	$model = new Products();

	$products = $model->listProducts();

	require("views/admin_products.php");
?>