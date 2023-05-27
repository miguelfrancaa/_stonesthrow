<?php

	require("models/products.php");

	$model = new Products();

	$product = $model->getProductDetails($id);

	require("views/productdetails.php");