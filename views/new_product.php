<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>StonesThrow</title>
		<meta name="description" content="BACKEND - SITE">
		<meta name="keywords" content="BACKEND - SITE">
		<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/styleadmin.css">
	</head>
	<body class="admin-crm inicio-page">
		<?php require('includes/menuback.php'); ?>
		<main class="pagina-geral"> 
			<h1>Novo Produto</h1>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<div class="campos">
							<div class="form-controls">
								<label>
									ITEM<br>
									<input type="text" name="product_item" minlength="3" maxlength="50" required>
								</label>
							</div>
							<div class="form-controls">
								<label>
									TYPE<br>
									<input type="text" name="product_type" minlength="3" maxlength="50" required>
								</label>
							</div>
							<div class="form-controls">
								<label>
									DESCRIPTION<br>
									<textarea rows="5" name="product_description"></textarea>
								</label>
							</div>
							<div class="form-controls">
								<label>
									PRICE<br>
									<input type="number" name="product_price">
								</label>
							</div>
							<div class="form-controls">
								<label>
									STOCK<br>
									<input type="number" name="product_stock">
								</label>
							</div>
							<div class="form-controls">
								<label>
									IMAGE<br>
									<input type="file" name="product_image">
								</label>
							</div>
							<div class="form-controls">
								<label>
									TRACKLIST<br>
									<textarea rows="5" name="product_tracklist"></textarea>
								</label>
							</div>
							<div class="form-controls">
								<label>
									CATEGORY<br>
									<input type="number" name="product_category">
								</label>
							</div>
							<div class="form-controls">
								<label>
									ARTIST<br>
									<input type="number" name="product_artist">
								</label>
							</div>
							
						</div>
					</div>

					<div class="col-md-12 col-xs-12">
						<div class="campos campos2">
							<button class="accao" type="submit" name="send">INSERT</button>
						</div>
					</div>

				</div>
			</form>

		</main>
	</body>
</html>