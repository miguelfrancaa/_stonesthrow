<?php ?>
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
		<button class="barra appear"><a href="/news/">ALL NEWS +</a></button>
		<!-- Carousel container -->
<div id="my-pics" class="carousel slide ab" data-ride="carousel" style="width:100%;">



<!-- Content -->
<div class="carousel-inner" role="listbox">

<!-- Slide 1 -->
<div class="item active">
<div class="newBack" style="background-image: url('img/news/<?= $news[0]["imageCarroussel"] ?>');">
	<div class="newText disappear" style="top: <?= $news[0]["top"] ?>%; left: <?= $news[0]["leftpx"] ?>px;">
		<h2 class="newTitle">
			<a href="
<?php
					echo'newcontent/'.$news[0]["new_id"].''
?>
			"><?= $news[0]["title"] ?>
			</a>
		</h2>
		<p class="newBig">
			“‘Alas Alice’ is a tale of love confounded,” says Yeofi. “It’s an endless cycle of going back and forth, in and out, round and around.” Mixing rich harmony, confessional lyrics, dreamy strings and Yeofi’s epic vocals, ‘Alas Alice’ is the duo’s first release since their debut album, Six Rocks, on Stones Throw in 2017.
		</p>
	</div>
	<div class="newText11 appear">
		<h2>
			The Steoples <br> Alas Alice
		</h2>
	</div>
</div>
</div>

<!-- Slide 2 -->
<div class="item">
<div class="newBack" style="background-image: url('img/news/<?= $news[1]["imageCarroussel"] ?>');">
	<div class="newText disappear" style="top: <?= $news[1]["top"] ?>%; left: <?= $news[1]["leftpx"] ?>px; position: absolute;">
		<h2 class="newTitle">
		<a href="
<?php
					echo'newcontent/'.$news[1]["new_id"].''
?>
			"><?= $news[1]["title"] ?>
			</a>
		</h2>
		<p class="newBig">
			Today is the 17th anniversary of the release of Madvillainy and the vinyl currently is on backorder, along with a few other titles. Our Madvillain by records by MF DOOM & Madlib have been in print ever since their original release.
		</p>
	</div>
</div>
</div>

<!-- Slide 3 -->
<div class="item">
<div class="newBack" style="background-image: url('img/news/<?= $news[2]["imageCarroussel"] ?>');">
	<div class="newText disappear" style="top: <?= $news[2]["top"] ?>%; left: <?= $news[2]["leftpx"] ?>px; position: absolute;">
		<h2 class="newTitle">
			<a href="
<?php
					echo'newcontent/'.$news[2]["new_id"].''
?>
			"><?= $news[2]["title"] ?>
			</a>
		</h2>
		<p class="newBig">
			Welcome Maylee Todd to Stones Throw. She’s a musician, performance artist, and producer based in Toronto, whose themes are inspired by science fiction and conceptual art.
		</p>
	</div>
</div>
</div>

<!-- Slide 4 -->
<div class="item">
<div class="newBack" style="background-image: url('/img/news/<?= $news[3]["imageCarroussel"] ?>');">
	<div class="newText disappear" style="top: <?= $news[3]["top"] ?>%; left: <?= $news[3]["leftpx"] ?>px; position: absolute;">
		<h2 class="newTitle">
			<a href="
<?php
					echo'newcontent/'.$news[3]["new_id"].''
?>
			"><?= $news[3]["title"] ?>
			</a>
		</h2>
		<p class="newBig">
			Welcome Maylee Todd to Stones Throw. She’s a musician, performance artist, and producer based in Toronto, whose themes are inspired by science fiction and conceptual art.
		</p>
	</div>
</div>
</div>

</div>

<!-- Previous/Next controls -->
<a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
<span aria-hidden="true"><img src="img/arrowleft.png" class="arrows arrowleft"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
<span aria-hidden="true"><img src="img/arrowright.png" class="arrows arrowright"></span>
<span class="sr-only">Next</span>
</a>

</div>
</main>

	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	</body>
</html>