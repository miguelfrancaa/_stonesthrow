<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>STONES THROW</title>
		<meta name="keywords" content="STONES THROW">
		<link rel="icon" href="img/logost.ico">
		<meta name="description" content="stones throw, records, hiphop, music, alternative, quasimoto, mfdoom, underground, label">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
<?php
	require("includes/header.php");
?>
	<main>
		<div class="container noAbsolute">

			<?php
			foreach ($videos as $video) {
				echo '<div class="row newVideo">
				<div class="col-md-2 col-sm-2 col-xs-2"></div>
				<div class="col-md-8 col-sm-8 col-xs-8">
					<div class="row videoTitle">
					'.$video["name"].'</div>
					<div class="row">
						<div class="video-container">
					<iframe class="videoYoutube" src="https://www.youtube.com/embed/'.$video["youtube_link"].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
				</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2"></div>
			</div>';
			}
		?>
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