<?php
	require("models/products.php");

	$model = new Products();

	if(isset($_POST["send"])){

		move_uploaded_file($_FILES["product_image"]["tmp_name"], "img/products/" . $_FILES["product_image"]["name"]);


		$product = $model->newProduct( $_POST );
	}	

	require("views/new_product.php");
?>