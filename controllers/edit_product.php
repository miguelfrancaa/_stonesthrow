<?php
	require("models/products.php");

	$model = new Products();

	$product = $model->productToEdit($id);

	if(isset($_POST["send"])){

		$filename = $_POST["photoname"];

		$move = "img/products/". $filename . ".png";

		move_uploaded_file($_FILES["product_image"]["tmp_name"], $move);

		$product = $model->updateProduct($_POST);

		header("Location: /admin_products");
	}

	require("views/edit_product.php");

	print_r($_POST);

	print_r($_FILES);

?>
