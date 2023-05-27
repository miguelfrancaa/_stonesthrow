<?php

	if(!isset($id) || !is_numeric($id)) {
			http_response_code(400);
			header("Location: /400");
			die();
		}

	require("models/products.php");

	$model = new Products();

	$products = $model->getProducts($id);


	require("views/products.php");
