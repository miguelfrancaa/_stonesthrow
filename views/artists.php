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
		<style type="text/css">
			<?php
				foreach ($artists as $artist) {
					echo ".".strtolower(trim(str_replace(" ", "", $artist["name"])))."fundo{
							position: fixed;
							width: 100%;
							height: 100vh;
							z-index: -3;
							background-image: url('img/artists/".$artist["photo"]."');
							 -webkit-background-size: cover;
						  	-moz-background-size: cover;
						  	-o-background-size: cover;
						  	background-size: cover;
						  	background-position: center;
						  animation-name: artists;
						  animation-duration: 0.5s;
							}";
				}
			?>
		</style>
	</head>
<?php
	require("includes/header.php");
?>
	<main>
		<ul class="artistsList">
<?php foreach ($artists as $artist) {
				echo'<li class="artists fundo '.strtolower(trim(str_replace(" ", "", $artist["name"]))).'"><a href="artistdetails.php?artist_id='.$artist["artist_id"].'">'.$artist["name"].'</a></li><br><br><br><br><br><br>';
			};
?>
		</ul>
	<div class="fundartist"></div>
	</main>


	
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<script type="text/javascript">
<?php
	foreach ($artists as $artist) {
		echo '
		$(".'.strtolower(trim(str_replace(" ", "", $artist["name"]))).'").hover(
		  function () {
		    $(".fundartist").addClass("'.strtolower(trim(str_replace(" ", "", $artist["name"]))).'fundo");
		  }, 
		  function () {
		    $(".fundartist").removeClass("'.strtolower(trim(str_replace(" ", "", $artist["name"]))).'fundo");
		  }
  		  );';
	}
?>
	</script>
	</body>
</html>