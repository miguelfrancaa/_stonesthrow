
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
		<div class="container noAbsoluteNews">
<?php
			foreach ($news as $new) {
				echo '
					<div class="row newsMenu">
				<a href="/newcontent/'.$new["new_id"].'">
				<div class="col-md-4">
					<div class="imgNew" style="background-image: url(/img/news/'.$new["image"].');"></div>
				</div>
				<div class="col-md-8 newsMenuText">
					<h2 class="titleNewsMenu">'.$new["title"].'</h2>
					<p class="titleNewsText">'.substr($new["content"], 0, 400).'...</p>
					<p class="readMore"><a class="ReadMoreA" href="">Read More</a><br></p>
					<time datetime="'.$new["created_at"].'"><div class="dateNewMenu">
					'.date("F d,\&\\n\b\s\p\ Y", strtotime($new["created_at"])).'</div>
				</div></time
				</a>
			</div>
				';
			}
?>
		</div>
	</main>
	<script src="/js/jquery-3.6.0.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/script.js"></script>
	</body>
</html>