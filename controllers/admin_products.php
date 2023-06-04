<?php
	require("models/products.php");

	$model = new Products();

	$products = $model->listProducts();

	require("views/admin_products.php");
?>