 <?php

 	require("models/categories.php");

	$model = new Categories();

	$categories = $model-> getCategoriesIds();


	if((!isset($id) || !is_numeric($id))) {
			http_response_code(400);
			require("views/400.php");
			die();
		}

	require_once("models/products.php");

	$model = new Products();

	$products = $model->getProducts($id);

	if(empty($products)) {
		http_response_code(404);
		require("views/404.php");
		die();
	}


	require("views/products.php");
