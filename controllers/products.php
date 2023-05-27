<?php

	if(!isset($id) || !is_numeric($id)) {
			http_response_code(400);
			header("Location: /400");
			die();
		}

	require("models/products.php");

	$model = new Products();

	$products = $model->getProducts($id);

	if(empty($products)) {
		http_response_code(404);
		header("Location: /404");
		die();
	}

	require("views/products.php");
