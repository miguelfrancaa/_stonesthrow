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
			<h1>Novo Artista</h1>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<div class="campos">
							<div class="form-controls">
								<label>
									Name<br>
									<input type="text" name="artist_name">
								</label>
							</div>
							<div class="form-controls">
								<label>
									DESCRIPTION<br>
									<textarea rows="5" name="artist_description"></textarea>
								</label>
							</div>
							<div class="form-controls">
								<label>
									PHOTO<br>
									<input type="file" name="artist_photo">
								</label>
							</div>
							<div class="form-controls">
								<label>
									DESCRIPTION PHOTO<br>
									<input type="file" name="artist_descriptionphoto">
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