<?php
	require("includes/admin_controller.php");

	require_once("models/products.php");

	$model = new Products();

	$product = $model->productToEdit($id);

	require_once("models/artists.php");

	$modelArtists = new Artists();

	$artists = $modelArtists->getArtists();

	$artists_name = [];

	foreach($artists as $artist){
		$artists_names[] = $artist["name"];
	}

	require("models/categories.php");

	$modelCategories = new Categories();

	$categories = $modelCategories->getSubcategoriesToSelect();

	$categories_name = [];

	foreach($categories as $category){
		$categories_name[] = $category["name"];
	}

	if(isset($_POST["send"])){

		foreach($_POST as $key => $value) {
			$_POST[ $key ] = trim(htmlspecialchars(strip_tags($value)));
		}

		if (isset($_POST["product_item"]) &&
			isset($_POST["product_type"]) &&
			isset($_POST["product_description"]) &&
			isset($_POST["product_price"]) &&
			isset($_POST["product_stock"]) &&
			isset($_POST["product_category"]) &&
			file_exists($_FILES['product_image']['tmp_name']) || is_uploaded_file($_FILES['product_image']['tmp_name']) &&
			mb_strlen($_POST["product_item"]) >= 3 &&
			mb_strlen($_POST["product_item"]) <= 50  &&
			mb_strlen($_POST["product_type"]) >= 3 &&
			mb_strlen($_POST["product_type"]) <= 50 &&
			mb_strlen($_POST["product_price"]) > 0) {

			move_uploaded_file($_FILES["artist_photo"]["tmp_name"], "img/products/" . $_FILES["artist_photo"]["name"]);
			move_uploaded_file($_FILES["artist_description_photo"]["tmp_name"], "img/products/" . $_FILES["artist_description_photo"]["name"]);

			$product = $model->updateProduct($_POST);

			header("Location: /admin_products");

		}else{
			echo 'Preencha os dados corretamente.';
		}

	}

	require("views/edit_product.php");

?>
