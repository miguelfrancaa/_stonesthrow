<?php
	require("models/products.php");

	$model = new Products();

	$product = $model->productToEdit($id);

	if(isset($_POST["send"])){

		move_uploaded_file($_FILES["product_image"]["tmp_name"], "img/products/" . $_FILES["product_image"]["name"]);

		$product = $model->updateProduct($_POST);

		header("Location: /admin_products");
	}

	require("views/edit_product.php");

	print_r($_POST);

	print_r($_FILES);

?>
