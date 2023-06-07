<?php
	require("models/categories.php");

	$model = new Categories();

	if((!isset($id) || !is_numeric($id))) {
			http_response_code(400);
			require("views/400.php");
			die();
		}

	$subcategories = $model->getSubcategories($id);

	$categories = $model->getCategoryId();

	if(empty($subcategories)) {
		http_response_code(404);
		require("views/404.php");
		die();
	}

	require("views/subcategories.php");
?>