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
		<script src="/js/tinymce/tinymce.min.js"></script>
		<script type="text/javascript">
			document.addEventListener("DOMContentLoaded", () => {

				tinymce.init({
					selector: 'textarea'
				})
			})
		</script>
	</head>
	<body class="admin-crm inicio-page">
		<?php 
		require('includes/menuback.php'); 
		?>
		<main class="pagina-geral"> 
			<h1>EDITAR artista</h1>
			<h6>Aqui pode gerir editar produtos</h6>

			<form action="/edit_artist/<?=$id?>" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<div class="campos">
							<div class="form-controls">
								<label>
									NAME:<br>
									<input type="text" name="artist_name" value="<?= $artist["name"] ?>" minlength="2" maxlength="50">
								</label>
							</div>
							<div class="form-controls">
								<label>
									DESCRIPTION<br>
									<textarea name="artist_description" value="<?= $artist["description"] ?>"></textarea>
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
									PHOTO<br>
									<input type="file" name="artist_descriptionphoto">
								</label>
							</div>
									<input type="hidden" name="artist_id" value="<?= $artist["artist_id"] ?>">
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