<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>STONES THROW</title>
		<meta name="keywords" content="STONES THROW">
		<link rel="icon" href="img/logost.ico">
		<meta name="description" content="stones throw, records, hiphop, music, alternative, quasimoto, mfdoom, underground, label">
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
<?php
	require("includes/header.php");
?>
	<main>
		<div class="container noAbsolute">
			<div class="row">
				<div class="col-md-12">
					<h1 class="newTitle1"><?= $news["title"]?></h1>
					<time datetime="<?= $news["created_at"] ?>"><h4 style="font-weight: 100; color: grey;"><?= date("F d,\&\\n\b\s\p\ Y",strtotime($news["created_at"])) ?></h4></time><br>
					<p class="newContent1"><?= $news["content"]?><br><br>
					</p>
					<div class="col-md-12 imgNewDesc" style="background-image: url('../img/news/<?=$news["image"]?>');"></div>
					<p class="newContent1"><?= $news["content2"]?>
					</p>
					<br><br>
				</div>
				<div class="col-md-1 col-sm-0 col-xs-0"></div>
				<div class="col-md-10 col-sm-12 col-xs-12">
					<iframe width="100%" height="400" src="https://www.youtube.com/embed/<?=$news["video"]?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
				<div class="col-md-1 col-sm-0 col-xs-0"></div>
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