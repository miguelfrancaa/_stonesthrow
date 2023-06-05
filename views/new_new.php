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
			<h1>Nova Notícia</h1>
			<form action="new_new/" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<div class="campos">
							<div class="form-controls">
								<label>
									TITLE<br>
									<input type="text" name="new_title">
								</label>
							</div>
							<div class="form-controls">
								<label>
									CONTENT<br>
									<textarea rows="5" name="new_content"></textarea>
								</label>
							</div>
							<div class="form-controls">
								<label>
									CONTENT2<br>
									<textarea rows="5" name="new_content2"></textarea>
								</label>
							</div>
							<div class="form-controls">
								<label>
									IMAGE<br>
									<input type="file" name="new_image">
								</label>
							</div>
							<div class="form-controls">
								<label>
									VIDEO<br>
									<input type="text" name="new_video">
								</label>
							</div>
							<div class="form-controls">
								<label>
									IMAGE CARROUSSEL<br>
									<input type="file" name="new_imageCarroussel">
								</label>
							</div>
							<div class="form-controls">
								<label>
									TOP<br>
									<input type="number" name="new_top">
								</label>
							</div>
							<div class="form-controls">
								<label>
									LEFTPX<br>
									<input type="number" name="new_left">
								</label>
							</div>
							<div class="form-controls">
								<label>
									ARTIST<br>
									<input type="number" name="new_artist">
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