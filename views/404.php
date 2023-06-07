<!DOCTYPE html>
<html style="overflow: hidden;">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>STONES THROW</title>
		<meta name="keywords" content="STONES THROW">
		<link rel="icon" href="/img/logost.ico">
		<meta name="description" content="stones throw, records, hiphop, music, alternative, quasimoto, mfdoom, underground, label">
		<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
	</head>
<?php
	require("includes/header.php");
?>
	<main>
	<div class="container err">
		<div class="rel">
		<div class="error">ERROR 404:<br> NOT FOUND</div>
		<div class="imgError"></div>
		</div>
	</div>
	</main>


	<script src="/js/jquery-3.6.0.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/script.js"></script>
	<script type="text/javascript">
		let img404 = [
		<?php
			foreach ($photoArtists as $photoArtist) {
				echo "
					'".$photoArtist["photo"]."',
				";
			}
		?>
		];

		let chooseImage = Math.floor(Math.random() * img404.length);
		let heightErrImage = parseFloat(Math.random() * (100 - 30) + 30).toFixed(0);
		let widthErrImage = parseFloat(Math.random() * (100 - 30) + 30).toFixed(0);
		let topErrImage = parseFloat(Math.random() * (90 - 10) + 10).toFixed(0);
		let leftErrImage = parseFloat(Math.random() * (40 - 0) + 0).toFixed(0);

		$(".imgError").css("top", topErrImage + '%');
		$(".imgError").css("left", leftErrImage + '%');
		$(".imgError").css("height", heightErrImage+ 'vh');
		$(".imgError").css("width", widthErrImage+ '%');
		$(".imgError").css("background-image", 'url(img/artists/'+img404[chooseImage]+')');

	</script>
	</body>
</html>