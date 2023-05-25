<?php
	require("models/categories.php");

	$model = new Categories();

	$subcategories = $model->getSubcategories($id);

	$categories = $model->getCategoryId();

	require("views/subcategories.php");
?>