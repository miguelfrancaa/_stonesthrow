 <?php

 	require("models/categories.php");

	$model = new Categories();

	$categories = $model-> getCategoriesIds();

	$idslist = [];

	foreach($categories as $category) {
		$idsList[] = $category["category_id"];
	}


	if((!isset($id) || !is_numeric($id))) {
			http_response_code(400);
			require("views/400.php");
			die();
		}

	require_once("models/products.php");

	$model = new Products();

	$products = $model->getProducts($id);

	if (in_array($id, $idsList) && empty($products)) {
		$message = "<h2>This category has no products available yet.</h2>";
	}else if(empty($products)) {
		http_response_code(404);
		require("views/404.php");
		die();
	}


	require("views/products.php");
