<?php
	require("models/products.php");

	$model = new Products();

	if(
		isset($_POST["product_id"]) &&
		isset($_POST["quantity"]) &&
		is_numeric($_POST["quantity"]) &&
		intval($_POST["quantity"]) > 0
	) {

		$quantity = intval($_POST["quantity"]);

		$product = $model->getProductsCart( $_POST );

		if (!empty($product))  {

		$_SESSION["cart"][$product["product_id"]] = [
			"product_id" => $product["product_id"],
			"quantity" => $quantity,
			"item" => $product["item"],
			"price" => $product["price"],
			"stock" => $product["stock"],
			"type" => $product["type"],
			"image" => $product["image"],
			"name" => $product["name"]
		];
		}

		header("Location: /cart/");
	}

	require("views/cart.php");
?>