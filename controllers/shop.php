<?php
	require("models/categories.php");

	$model = new Categories();

	$categories = $model->getCategories1();

	require("views/shop.php");
?>