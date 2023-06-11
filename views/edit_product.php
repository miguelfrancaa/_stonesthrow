<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BACKEND - SITE</title>
		<meta name="description" content="BACKEND - SITE">
		<meta name="keywords" content="BACKEND - SITE">
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/styleadmin.css">
	</head>
	<body class="admin-crm inicio-page">
		<?php 
		require('includes/menuback.php'); 
		?>
		<main class="pagina-geral"> 
			<h1>EDITAR Produto</h1>
			<h6>Aqui pode gerir editar produtos</h6>

			<form action="/edit_product/<?=$id?>" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<div class="campos">
							<div class="form-controls">
								<label>
									Item:<br>
									<input type="text" name="product_item" value="<?= $product["item"] ?>">
								</label>
							</div>
							<div class="form-controls">
								<label>
									Type<br>
									<input type="text" name="product_type" value="<?= $product["type"] ?>">
								</label>
							</div>
							<div class="form-controls">
								<label>
									Description<br>
									<textarea name="product_description"><?= $product["description"] ?></textarea>
								</label>
							</div>
							<div class="form-controls">
								<label>
									Price:<br>
									<input type="number" name="product_price" value="<?= $product["price"] ?>">
								</label>
							</div>
							<div class="form-controls">
								<label>
									Stock:<br>
									<input type="text" name="product_stock" value="<?= $product["stock"] ?>">
								</label>
							</div>
							<div class="form-controls">
								<label>
									Image:<br>
									<input type="file" name="product_image">
								</label>
							</div>
							<div class="form-controls">
								<label>
									Tracklist:<br>
									<textarea name="product_tracklist"><?= $product["tracklist"] ?></textarea>
								</label>
							</div>
							<div class="form-controls">
								<label>
									Category:<br>
									<input type="number" name="product_category" value="<?= $product["category_id"] ?>">
								</label>
							</div>
							<div class="form-controls">
								<label>
									Artist:<br>
									<input type="number" name="product_artist" value="<?= $product["artist_id"] ?>">
								</label>
									<input type="hidden" name="product_id" value="<?= $product["product_id"] ?>">
									<input type="hidden" name="photoname" value="<?= bin2hex(random_bytes(6)) ?>">
							</div>
							
						</div>
					</div>

					

					<div class="col-md-12 col-xs-12">
						<div class="campos campos2">
							<button class="accao" type="submit" name="send">Save Product</button>
						</div>
					</div>

				</div>
			</form>

		</main>
	</body>
</html>