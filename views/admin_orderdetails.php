<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>StonesThrow BACKEND</title>
		<meta name="description" content="BACKEND - SITE">
		<meta name="keywords" content="BACKEND - SITE">
		<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/styleadmin.css">
	</head>
	<body class="admin-crm inicio-page">
		<?php require("includes/menuback.php"); ?>
		<main class="pagina-geral"> 
			<h1>Detalhes de Encomenda # <?= $id ?></h1>

<?php

	$total = 0;

	foreach ($products as $product) {
		$subtotal = $product["priceEach"] * $product["quantity"];

		$total += $subtotal;

		echo "PRODUCT ID: ". $product["product_id"] ."<br>PRICE EACH: ". $product["priceEach"] ."<br>QUANTITY: ". $product["quantity"] ."<br>SUBTOTAL: ". $subtotal ."<br><br>";


	}

	echo "TOTAL = ".$total."€";




?>


			



		</main>
	</body>