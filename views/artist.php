<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>STONES THROW</title>
		<meta name="keywords" content="STONES THROW">
		<link rel="icon" href="img/logost.ico">
		<meta name="description" content="stones throw, records, hiphop, music, alternative, quasimoto, mfdoom, underground, label">
		<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
	</head>
<?php
	require("includes/header.php");
?>
	<main>
		
		<div class="container noAbsolute">
			<div><h1 class="artistTitle"><?= $artist["name"] ?></h1></div><br><br>
			<div class="row">
				<div class="col-md-6 imgEsq"><img src="/img/artists/<?= $artist["description_photo"] ?>"></div>
				<div class="col-md-6 textEsq"><?= $artist["description"] ?></div>
			</div>
		</div>
	</main>

	<?php
	require("includes/footer.php");
	?>



	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	</body>
</html>