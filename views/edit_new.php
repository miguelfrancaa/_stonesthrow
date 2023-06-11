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
			<h1>EDITAR Noticia</h1>

			<form action="/edit_new" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<div class="campos">
							<div class="form-controls">
								<label>
									TITLE:<br>
									<input type="text" name="new_title" value="<?= $new["title"] ?>">
								</label>
							</div>
							<div class="form-controls">
								<label>
									CONTENT:<br>
								<textarea name="new_content"><?= $new["content"] ?></textarea>
								</label>
							</div>
							<div class="form-controls">
								<label>
									CONTENT2:<br>
									<textarea name="new_content2"><?= $new["content2"] ?></textarea>
								</label>
							</div>
							<div class="form-controls">
								<label>
									IMAGE:<br>
									<input type="file" name="new_image" value="<?= $new["image"] ?>">
								</label>
							</div>
							<div class="form-controls">
								<label>
									VIDEO:<br>
									<input type="text" name="new_video" value="<?= $new["video"] ?>">
								</label>
							</div>
							<div class="form-controls">
								<label>
									IMAGE_CARROUSSEL:<br>
									<input type="file" name="new_imageCarroussel" value="<?= $new["image_carroussel"] ?>">
								</label>
							</div>
							<div class="form-controls">
								<label>
									TOP:<br>
									<input type="number" value="<?= $new["top"] ?>" name="new_top">
								</label>
							</div>
							<div class="form-controls">
								<label>
									LEFT:<br>
									<input type="number" name="new_left" value="<?= $new["leftpx"] ?>">
								</label>
							</div>
							<div class="form-controls">
								<label>
									ARTIST:<br>
									<input type="number" name="new_artist" value="<?= $new["artist_id"] ?>">
								</label>
									<input type="hidden" name="new_id" value="<?= $new["new_id"] ?>">
							</div>
							
						</div>
					</div>

					

					<div class="col-md-12 col-xs-12">
						<div class="campos campos2">
							<button class="accao" type="submit" name="send">Save New</button>
						</div>
					</div>

				</div>
			</form>

		</main>
	</body>
</html>