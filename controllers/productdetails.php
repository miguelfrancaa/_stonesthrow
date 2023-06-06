<?php

	if(!isset($id) || !is_numeric($id)) {
			http_response_code(400);
			header("Location: /400");
			die();
		}

	require_once("models/products.php");

	$model = new Products();

	$product = $model->getProductDetails($id);

	if(empty($product)) {
		http_response_code(404);
		header("Location: /404");
		die();
	}

	require("views/productdetails.php");