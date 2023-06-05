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
			<h1>Gestao de Produtos</h1>

			<div class="accoes-gerais">
				<a href="novo-projeto.php">Novo Produto</a>
			</div>

			<table>
				<tr class="head-line">
					<th>ID</th>
					<th>ITEM</th>
					<th>TYPE</th>
					<th>DESCRIPTION</th>
					<th>PRICE</th>
					<th>STOCK</th>
					<th>IMAGE</th>
					<th>TRACKLIST</th>
					<th>CATEGORY</th>
					<th>ARTIST</th>
					<th>ACTIONS</th>
				</tr>
<?php
				foreach($products as $product){
					echo "
						<form method='post' action='/delete_product'>
						<input type='hidden' name='product_id' value='".$product["product_id"]."'>
						<tr>
							<th>". $product["product_id"] ."</th>
							<th>". $product["item"] ."</th>
							<th>". $product["type"] ."</th>
							<th>". substr($product["description"], 0, 50) ."...</th>
							<th>". $product["price"] ."</th>
							<th>". $product["stock"] ."</th>
							<th>". $product["image"] ."</th>
							<th>". substr($product["tracklist"], 0, 50) ."...</th>
							<th>". $product["category_id"] ."</th>
							<th>". $product["artist_id"] ."</th>
							<th>
							<button type='submit' name='send' class='apagar'>Eliminar</button>
							<a href='/edit_product/". $product["product_id"] ."' class='editar'>Editar</a>
							</th>
						</tr>
						</form>
					";
				}
?>
					</tr>
			</table>



		</main>
	</body>
</html>